<?php
/**
 * Contact Form Handler
 * EDONG, CLARK STEVEN T. Portfolio
 * Location: Dahican, Mati City, Philippines, 8200
 */

header('Content-Type: application/json');

// Configuration
$recipientEmail = 'clark.edong@example.com'; // Update with your email
$siteName = 'EDONG Portfolio';

// Response function
function sendResponse($success, $message) {
    echo json_encode([
        'success' => $success,
        'message' => $message
    ]);
    exit;
}

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Invalid request method');
}

// Get form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation
if (empty($name) || empty($email) || empty($message)) {
    sendResponse(false, 'Required fields are missing');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse(false, 'Invalid email address');
}

// Sanitize inputs
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Map subject values to labels
$subjectLabels = [
    'project' => 'Project Collaboration',
    'hire' => 'Hiring Opportunity',
    'consult' => 'Consultation',
    'other' => 'Other Inquiry'
];

$subjectLabel = isset($subjectLabels[$subject]) ? $subjectLabels[$subject] : 'General Inquiry';

// Build email
$emailSubject = "[{$siteName}] New Message: {$subjectLabel}";
$emailBody = "Name: {$name}\n";
$emailBody .= "Email: {$email}\n";
$emailBody .= "Subject: {$subjectLabel}\n";
$emailBody .= "Message:\n{$message}\n";
$emailBody .= "\n---\nSent from: " . $_SERVER['HTTP_HOST'] . "\n";
$emailBody .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
$emailBody .= "Time: " . date('Y-m-d H:i:s') . "\n";

$headers = "From: {$email}\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email (uncomment when ready)
// $mailSent = mail($recipientEmail, $emailSubject, $emailBody, $headers);

// For development/demo - simulate success
$mailSent = true;

if ($mailSent) {
    // Optional: Save to database
    // saveContactToDatabase($name, $email, $subject, $message);
    
    sendResponse(true, 'Message transmitted successfully');
} else {
    sendResponse(false, 'Failed to send message');
}

/**
 * Example function to save contact to database
 * Uncomment and modify when database is configured
 */
/*
function saveContactToDatabase($name, $email, $subject, $message) {
    // Database configuration
    $dbHost = 'localhost';
    $dbName = 'portfolio_db';
    $dbUser = 'db_username';
    $dbPass = 'db_password';
    
    try {
        $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare("INSERT INTO contacts (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$name, $email, $subject, $message]);
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
    }
}
*/
