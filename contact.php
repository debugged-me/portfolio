<?php

/**
 * Contact Form Handler
 * CLARkODER Portfolio
 */

header('Content-Type: application/json');

require_once __DIR__ . '/recaptcha-config.php';

$recaptchaConfig = getRecaptchaConfig();
$recipientEmail = 'clarksteven.edong@softtechservices.net';
$siteName = 'CLARkODER Portfolio';
$recaptchaSecret = $recaptchaConfig['secret_key'];
$storagePath = __DIR__ . '/storage/contact-submissions.log';
$recaptchaExpectedAction = $recaptchaConfig['action'];
$recaptchaMinimumScore = $recaptchaConfig['minimum_score'];

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

function getCurrentHost()
{
    $host = trim((string) ($_SERVER['HTTP_HOST'] ?? ''));
    if ($host === '') {
        return '';
    }

    return preg_replace('/:\d+\z/', '', strtolower($host));
}

function verifyRecaptchaToken($secret, $token)
{
    if ($token === '') {
        return null;
    }

    if ($secret === '') {
        return null;
    }

    $payload = http_build_query([
        'secret' => $secret,
        'response' => $token,
        'remoteip' => getClientIp(),
    ]);

    if (function_exists('curl_init')) {
        $curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt_array($curl, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $response = curl_exec($curl);
    } else {
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => $payload,
                'timeout' => 10,
            ],
        ]);

        $response = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
    }

    if ($response === false || !is_string($response)) {
        return null;
    }

    $decoded = json_decode($response, true);
    if (!is_array($decoded)) {
        return null;
    }

    return $decoded;
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

function sendMailWithNativeMail($recipientEmail, $siteName, $name, $email, $subject, $messageBody)
{
    $recipientDomain = substr(strrchr($recipientEmail, '@'), 1) ?: 'localhost';
    $fromEmail = filter_var('noreply@' . $recipientDomain, FILTER_VALIDATE_EMAIL) ?: $recipientEmail;
    $mailSubject = '[' . $siteName . '] ' . $subject . ' from ' . $name . ' <' . $email . '>';

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

    return [
        'success' => $mailSent,
        'transport' => 'php-mail',
        'error' => $mailSent ? '' : 'PHP mail() returned false.',
    ];
}

// Include SMTP configuration if available
if (file_exists(__DIR__ . '/phpmailer-config.php')) {
    require_once __DIR__ . '/phpmailer-config.php';
}

function sendMailMessage($recipientEmail, $siteName, $name, $email, $subject, $messageBody)
{
    $smtpAvailability = function_exists('getSmtpAvailabilityStatus')
        ? getSmtpAvailabilityStatus()
        : ['ready' => false, 'reason' => 'SMTP status unavailable.'];

    // If SMTP is configured or intended for this deployment, do not silently
    // fall back to native mail because that hides production routing issues.
    if (function_exists('sendMailWithSMTP')) {
        $smtpResult = sendMailWithSMTP($recipientEmail, $siteName, $name, $email, $subject, $messageBody);
        if (($smtpAvailability['ready'] ?? false) || !empty(getMailConfig()['host']) || !empty(getMailConfig()['username'])) {
            return $smtpResult;
        }
    }

    return sendMailWithNativeMail($recipientEmail, $siteName, $name, $email, $subject, $messageBody);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Invalid request method.');
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$recaptchaToken = isset($_POST['g-recaptcha-response']) ? trim($_POST['g-recaptcha-response']) : '';

if ($name === '' || $email === '' || $message === '') {
    sendResponse(false, 'Required fields are missing.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse(false, 'Invalid email address.');
}

$currentHost = getCurrentHost();

if ($recaptchaSecret === '') {
    sendResponse(false, 'reCAPTCHA secret is missing. Set secret_key in recaptcha-config.local.php.');
}

if ($recaptchaSecret === 'paste-your-recaptcha-secret-key-here') {
    sendResponse(false, 'reCAPTCHA secret is still a placeholder. Update recaptcha-config.local.php with your real secret key.');
}

if ($recaptchaToken === '') {
    sendResponse(false, 'reCAPTCHA verification failed. Please complete the challenge again.');
}

$verification = verifyRecaptchaToken($recaptchaSecret, $recaptchaToken);
if (!is_array($verification) || empty($verification['success'])) {
    sendResponse(false, 'reCAPTCHA verification failed. Please complete the challenge again.');
}

$verifiedAction = isset($verification['action']) ? (string) $verification['action'] : '';
$verifiedScore = isset($verification['score']) ? (float) $verification['score'] : 0.0;
$verifiedHostname = isset($verification['hostname']) ? strtolower((string) $verification['hostname']) : '';

if ($verifiedAction !== $recaptchaExpectedAction) {
    sendResponse(false, 'reCAPTCHA action mismatch.');
}

if ($verifiedScore < $recaptchaMinimumScore) {
    sendResponse(false, 'reCAPTCHA score too low. Please try again.');
}

if ($currentHost !== '' && $verifiedHostname !== '' && $verifiedHostname !== $currentHost) {
    sendResponse(false, 'reCAPTCHA hostname mismatch.');
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

$mailResult = sendMailMessage($recipientEmail, $siteName, $name, $email, $subjectLabel, $message);
$mailSent = !empty($mailResult['success']);
$loggedPath = storeSubmission($storagePath, [
    'name' => $name,
    'email' => $email,
    'subject' => $subjectLabel,
    'message' => $message,
    'ip' => getClientIp(),
    'host' => $_SERVER['HTTP_HOST'] ?? 'unknown',
    'created_at' => date('c'),
    'mail_sent' => $mailSent,
    'mail_transport' => $mailResult['transport'] ?? 'unknown',
    'mail_error' => $mailResult['error'] ?? '',
    'mail_message_id' => $mailResult['message_id'] ?? '',
    'recaptcha_score' => $verifiedScore,
    'recaptcha_action' => $verifiedAction,
]);
$logged = $loggedPath !== false;

if ($mailSent) {
    sendResponse(true, 'Message sent successfully. Check your inbox for my reply.', [
        'logged' => $logged,
        'transport' => $mailResult['transport'] ?? 'unknown',
    ]);
}

if (function_exists('mailConfigHasPlaceholderValues') && mailConfigHasPlaceholderValues()) {
    sendResponse(false, 'SMTP is still using placeholder values. Update mail-config.local.php with your real SMTP credentials.', [
        'logged' => $logged,
        'stored' => $logged ? basename((string) $loggedPath) : null,
    ]);
}

if (function_exists('getMailConfigMissingFields')) {
    $missingMailFields = getMailConfigMissingFields();
    if ($missingMailFields !== []) {
        sendResponse(false, 'SMTP is not configured. Fill these fields in mail-config.local.php: ' . implode(', ', $missingMailFields) . '.', [
            'logged' => $logged,
            'stored' => $logged ? basename((string) $loggedPath) : null,
        ]);
    }
}

if ($logged) {
    $failureMessage = 'Message saved, but email delivery failed on this server.';
    if (!empty($mailResult['error'])) {
        $failureMessage .= ' ' . $mailResult['error'];
    }

    sendResponse(false, $failureMessage, [
        'logged' => true,
        'stored' => basename((string) $loggedPath),
        'transport' => $mailResult['transport'] ?? 'unknown',
    ]);
}

sendResponse(false, 'Message could not be sent or stored. Check PHP mail/sendmail settings on this server.');
