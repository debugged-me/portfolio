<?php

/**
 * SMTP Configuration for XAMPP
 * Using PHPMailer for reliable email delivery
 */

// Import PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer (assuming it's installed via Composer)
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
} else {
    // Fallback: include PHPMailer manually if Composer is not available
    // You'll need to download PHPMailer and place it in a 'phpmailer' folder
    if (file_exists(__DIR__ . '/phpmailer/src/PHPMailer.php')) {
        require_once __DIR__ . '/phpmailer/src/PHPMailer.php';
        require_once __DIR__ . '/phpmailer/src/SMTP.php';
        require_once __DIR__ . '/phpmailer/src/Exception.php';
    }
}

function loadConfigArrayFromFile($path)
{
    if (!is_string($path) || $path === '' || !file_exists($path)) {
        return [];
    }

    $loaded = require $path;
    return is_array($loaded) ? $loaded : [];
}

function getFirstNonEmptyConfigValue(...$values)
{
    foreach ($values as $value) {
        if ($value === null || $value === false) {
            continue;
        }

        if (is_string($value)) {
            if (trim($value) === '') {
                continue;
            }

            return $value;
        }

        if ($value !== '') {
            return $value;
        }
    }

    return null;
}

function getMailConfig()
{
    static $config = null;

    if (is_array($config)) {
        return $config;
    }

    $privateConfig = [];
    $homeDir = rtrim((string) (getenv('HOME') ?: dirname(__DIR__)), DIRECTORY_SEPARATOR);
    $privateConfigCandidates = array_unique([
        $homeDir . DIRECTORY_SEPARATOR . 'mail-config.private.php',
        dirname(__DIR__) . DIRECTORY_SEPARATOR . 'mail-config.private.php',
    ]);

    foreach ($privateConfigCandidates as $candidate) {
        $privateConfig = loadConfigArrayFromFile($candidate);
        if ($privateConfig !== []) {
            break;
        }
    }

    $localConfigPath = __DIR__ . '/mail-config.local.php';
    $localConfig = loadConfigArrayFromFile($localConfigPath);

    $envHost = getenv('SMTP_HOST');
    $envPort = getenv('SMTP_PORT');
    $envUsername = getenv('SMTP_USERNAME');
    $envPassword = getenv('SMTP_PASSWORD');
    $envEncryption = getenv('SMTP_ENCRYPTION');
    $envFromEmail = getenv('SMTP_FROM_EMAIL');
    $envFromName = getenv('SMTP_FROM_NAME');

    $config = [
        'host' => trim((string) (getFirstNonEmptyConfigValue(
            $localConfig['host'] ?? null,
            $privateConfig['host'] ?? null,
            $envHost !== false ? $envHost : null
        ) ?? '')),
        'port' => (int) (getFirstNonEmptyConfigValue(
            $localConfig['port'] ?? null,
            $privateConfig['port'] ?? null,
            $envPort !== false ? $envPort : null,
            587
        ) ?? 587),
        'username' => trim((string) (getFirstNonEmptyConfigValue(
            $localConfig['username'] ?? null,
            $privateConfig['username'] ?? null,
            $envUsername !== false ? $envUsername : null
        ) ?? '')),
        'password' => (string) (getFirstNonEmptyConfigValue(
            $localConfig['password'] ?? null,
            $privateConfig['smtp_password'] ?? null,
            $privateConfig['password'] ?? null,
            $envPassword !== false ? $envPassword : null
        ) ?? ''),
        'encryption' => strtolower(trim((string) (getFirstNonEmptyConfigValue(
            $localConfig['encryption'] ?? null,
            $privateConfig['encryption'] ?? null,
            $envEncryption !== false ? $envEncryption : null,
            'tls'
        ) ?? 'tls'))),
        'from_email' => trim((string) (getFirstNonEmptyConfigValue(
            $localConfig['from_email'] ?? null,
            $privateConfig['from_email'] ?? null,
            $envFromEmail !== false ? $envFromEmail : null
        ) ?? '')),
        'from_name' => trim((string) (getFirstNonEmptyConfigValue(
            $localConfig['from_name'] ?? null,
            $privateConfig['from_name'] ?? null,
            $envFromName !== false ? $envFromName : null
        ) ?? '')),
    ];

    return $config;
}

function getMailConfigMissingFields()
{
    $mailConfig = getMailConfig();
    $required = [
        'host' => $mailConfig['host'],
        'username' => $mailConfig['username'],
        'password' => $mailConfig['password'],
        'from_email' => $mailConfig['from_email'],
    ];

    $missing = [];
    foreach ($required as $field => $value) {
        if ($value === '') {
            $missing[] = $field;
        }
    }

    return $missing;
}

function mailConfigHasPlaceholderValues()
{
    $mailConfig = getMailConfig();
    $placeholders = [
        'your-email@gmail.com',
        'your-app-password',
    ];

    foreach (['host', 'username', 'password', 'from_email'] as $field) {
        if (in_array($mailConfig[$field], $placeholders, true)) {
            return true;
        }
    }

    return false;
}

function mailConfigIsReady()
{
    return getMailConfigMissingFields() === [] && !mailConfigHasPlaceholderValues();
}

function getSmtpAvailabilityStatus()
{
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        return [
            'ready' => false,
            'reason' => 'PHPMailer is not installed on this server.',
        ];
    }

    $missing = getMailConfigMissingFields();
    if ($missing !== []) {
        return [
            'ready' => false,
            'reason' => 'SMTP config is incomplete: ' . implode(', ', $missing) . '.',
        ];
    }

    if (mailConfigHasPlaceholderValues()) {
        return [
            'ready' => false,
            'reason' => 'SMTP config still contains placeholder values.',
        ];
    }

    return [
        'ready' => true,
        'reason' => '',
    ];
}

function sendMailWithSMTP($recipientEmail, $siteName, $name, $email, $subject, $messageBody)
{
    $availability = getSmtpAvailabilityStatus();
    if (!$availability['ready']) {
        return [
            'success' => false,
            'transport' => 'smtp',
            'error' => $availability['reason'],
        ];
    }

    $mailConfig = getMailConfig();
    $smtpHost = $mailConfig['host'];
    $smtpPort = $mailConfig['port'];
    $smtpUsername = $mailConfig['username'];
    $smtpPassword = $mailConfig['password'];
    $smtpEncryption = $mailConfig['encryption'];
    $smtpFromEmail = $mailConfig['from_email'];
    $smtpFromName = $mailConfig['from_name'] !== '' ? $mailConfig['from_name'] : $siteName;

    if (!filter_var($smtpFromEmail, FILTER_VALIDATE_EMAIL)) {
        return [
            'success' => false,
            'transport' => 'smtp',
            'error' => 'SMTP_FROM_EMAIL is invalid.',
        ];
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $smtpHost;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtpUsername;
        $mail->Password   = $smtpPassword;
        $mail->SMTPSecure = $smtpEncryption === 'ssl'
            ? PHPMailer::ENCRYPTION_SMTPS
            : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $smtpPort > 0 ? $smtpPort : 587;
        $mail->CharSet    = 'UTF-8';

        // Recipients
        $mail->setFrom($smtpFromEmail, $name . ' via ' . $smtpFromName);
        $mail->addAddress($recipientEmail);
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(false);
        $mail->Subject = '[' . $siteName . '] ' . $subject . ' from ' . $name . ' <' . $email . '>';

        $body = "Name: {$name}\n";
        $body .= "Email: {$email}\n";
        $body .= "Subject: {$subject}\n";
        $body .= "Message:\n{$messageBody}\n";
        $body .= "\n---\n";
        $body .= 'Host: ' . ($_SERVER['HTTP_HOST'] ?? 'unknown') . "\n";
        $body .= 'IP: ' . getClientIp() . "\n";
        $body .= 'Time: ' . date('Y-m-d H:i:s') . "\n";

        $mail->Body = $body;

        $mail->send();

        return [
            'success' => true,
            'transport' => 'smtp',
            'error' => '',
            'message_id' => $mail->getLastMessageID(),
        ];
    } catch (Exception $e) {
        error_log('PHPMailer Error: ' . $mail->ErrorInfo);
        return [
            'success' => false,
            'transport' => 'smtp',
            'error' => $mail->ErrorInfo !== '' ? $mail->ErrorInfo : $e->getMessage(),
        ];
    }
}
