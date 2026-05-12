<?php

/**
 * Contact Form Handler
 * CLARkODER Portfolio
 */

header('Content-Type: application/json');

$recipientEmail = 'clarksteven.edong@softtechservices.net';
$siteName = 'CLARkODER Portfolio';
$turnstileSecret = getenv('TURNSTILE_SECRET_KEY') ?: '';
$storagePath = __DIR__ . '/storage/contact-submissions.log';

function sendResponse($success, $message, $extra = [])
{
    echo json_encode(array_merge([
        'success' => $success,
        'message' => $message,
    ], $extra));
    exit;
}

function getClientIp()
{
    foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $key) {
        if (!empty($_SERVER[$key])) {
            return trim(explode(',', $_SERVER[$key])[0]);
        }
    }

    return 'unknown';
}

function verifyTurnstileToken($secret, $token)
{
    if ($token === '') {
        return false;
    }

    if ($secret === '') {
        return true;
    }

    $payload = http_build_query([
        'secret' => $secret,
        'response' => $token,
        'remoteip' => getClientIp(),
    ]);

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => $payload,
            'timeout' => 10,
        ],
    ]);

    $response = @file_get_contents('https://challenges.cloudflare.com/turnstile/v0/siteverify', false, $context);
    if ($response === false) {
        return false;
    }

    $decoded = json_decode($response, true);

    return !empty($decoded['success']);
}

function storeSubmission($storagePath, $payload)
{
    $targets = [$storagePath];

    $uploadTempDir = rtrim((string) ini_get('upload_tmp_dir'), DIRECTORY_SEPARATOR);
    if ($uploadTempDir !== '') {
        $targets[] = $uploadTempDir . DIRECTORY_SEPARATOR . 'clarkoder-portfolio' . DIRECTORY_SEPARATOR . 'contact-submissions.log';
    }

    $tempDir = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR);
    if ($tempDir !== '' && $tempDir !== $uploadTempDir) {
        $targets[] = $tempDir . DIRECTORY_SEPARATOR . 'clarkoder-portfolio' . DIRECTORY_SEPARATOR . 'contact-submissions.log';
    }

    $line = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . PHP_EOL;

    foreach ($targets as $target) {
        $directory = dirname($target);

        if (!is_dir($directory) && !@mkdir($directory, 0775, true) && !is_dir($directory)) {
            continue;
        }

        if (@file_put_contents($target, $line, FILE_APPEND | LOCK_EX) !== false) {
            return $target;
        }
    }

    if (@error_log('CLARkODER contact fallback: ' . trim($line))) {
        return 'php-error-log';
    }

    return false;
}

function sendMailMessage($recipientEmail, $siteName, $name, $email, $subject, $messageBody)
{
    $recipientDomain = substr(strrchr($recipientEmail, '@'), 1) ?: 'localhost';
    $fromEmail = filter_var('noreply@' . $recipientDomain, FILTER_VALIDATE_EMAIL) ?: $recipientEmail;
    $mailSubject = '[' . $siteName . '] New Message: ' . $subject;

    $body = "Name: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Subject: {$subject}\n";
    $body .= "Message:\n{$messageBody}\n";
    $body .= "\n---\n";
    $body .= 'Host: ' . ($_SERVER['HTTP_HOST'] ?? 'unknown') . "\n";
    $body .= 'IP: ' . getClientIp() . "\n";
    $body .= 'Time: ' . date('Y-m-d H:i:s') . "\n";

    $headers = implode("\r\n", [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $siteName . ' <' . $fromEmail . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
        'X-Mailer: PHP/' . phpversion(),
    ]);

    $mailSent = @mail($recipientEmail, $mailSubject, $body, $headers, '-f ' . $fromEmail);
    if (!$mailSent) {
        $mailSent = @mail($recipientEmail, $mailSubject, $body, $headers);
    }

    return $mailSent;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Invalid request method.');
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$turnstileToken = isset($_POST['cf-turnstile-response']) ? trim($_POST['cf-turnstile-response']) : '';

if ($name === '' || $email === '' || $message === '') {
    sendResponse(false, 'Required fields are missing.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse(false, 'Invalid email address.');
}

if (!verifyTurnstileToken($turnstileSecret, $turnstileToken)) {
    sendResponse(false, 'Verification failed. Please complete the challenge again.');
}

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$subjectLabels = [
    'project' => 'Project Collaboration',
    'hire' => 'Hiring Opportunity',
    'consult' => 'Consultation',
    'other' => 'Other Inquiry',
];

$subjectLabel = isset($subjectLabels[$subject]) ? $subjectLabels[$subject] : 'General Inquiry';

$mailSent = sendMailMessage($recipientEmail, $siteName, $name, $email, $subjectLabel, $message);
$loggedPath = storeSubmission($storagePath, [
    'name' => $name,
    'email' => $email,
    'subject' => $subjectLabel,
    'message' => $message,
    'ip' => getClientIp(),
    'host' => $_SERVER['HTTP_HOST'] ?? 'unknown',
    'created_at' => date('c'),
    'mail_sent' => $mailSent,
]);
$logged = $loggedPath !== false;

if ($mailSent) {
    sendResponse(true, 'Message sent successfully. Check your inbox for my reply.', [
        'logged' => $logged,
    ]);
}

if ($logged) {
    sendResponse(false, 'Message saved, but email delivery failed on this server. Local XAMPP usually needs SMTP or sendmail setup before PHP mail() works.', [
        'logged' => true,
        'stored' => basename((string) $loggedPath),
    ]);
}

sendResponse(false, 'Message could not be sent or stored. Check PHP mail/sendmail settings on this server.');
