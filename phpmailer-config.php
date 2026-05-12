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

function sendMailWithSMTP($recipientEmail, $siteName, $name, $email, $subject, $messageBody) {
    // If PHPMailer is not available, fall back to regular mail()
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        return sendMailMessage($recipientEmail, $siteName, $name, $email, $subject, $messageBody);
    }
    
    $mail = new PHPMailer(true);
    
    try {
        // SMTP Configuration for Gmail (you can change this)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your-email@gmail.com';  // Replace with your Gmail
        $mail->Password   = 'your-app-password';     // Replace with your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        // Recipients
        $mail->setFrom('noreply@' . parse_url($recipientEmail, PHP_URL_HOST) ?: 'localhost', $siteName);
        $mail->addAddress($recipientEmail);
        $mail->addReplyTo($email, $name);
        
        // Content
        $mail->isHTML(false);
        $mail->Subject = '[' . $siteName . '] New Message: ' . $subject;
        
        $body = "Name: {$name}\n";
        $body .= "Email: {$email}\n";
        $body .= "Subject: {$subject}\n";
        $body .= "Message:\n{$messageBody}\n";
        $body .= "\n---\n";
        $body .= 'Host: ' . ($_SERVER['HTTP_HOST'] ?? 'unknown') . "\n";
        $body .= 'IP: ' . getClientIp() . "\n";
        $body .= 'Time: ' . date('Y-m-d H:i:s') . "\n";
        
        $mail->Body = $body;
        
        return $mail->send();
        
    } catch (Exception $e) {
        // Log error and fall back to regular mail()
        error_log('PHPMailer Error: ' . $mail->ErrorInfo);
        return sendMailMessage($recipientEmail, $siteName, $name, $email, $subject, $messageBody);
    }
}
