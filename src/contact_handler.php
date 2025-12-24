<?php
/**
 * Contact Form Handler
 * Procesa el formulario de contacto y envía email usando configuración .env
 */

function handleContactForm($post_data) {
    // Load environment variables
    $env_file = __DIR__ . '/../.env';
    if (!file_exists($env_file)) {
        return [
            'success' => false,
            'message' => 'Configuration file not found'
        ];
    }
    
    $env = parse_ini_file($env_file);
    
    // Validate and sanitize inputs
    $name = trim($post_data['name'] ?? '');
    $email = trim($post_data['email'] ?? '');
    $subject = trim($post_data['subject'] ?? '');
    $message = trim($post_data['message'] ?? '');
    
    // Sanitize after validation
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    
    // Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        return [
            'success' => false,
            'message' => 'All fields are required'
        ];
    }
    
    // Sanitize and validate email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return [
            'success' => false,
            'message' => 'Invalid email address'
        ];
    }
    
    // Prepare email - All values from .env
    $to = $env['CONTACT_EMAIL'];
    $email_subject = "[Contact Form] " . $subject;
    
    // Email body
    $email_body = "New contact form submission:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n\n";
    $email_body .= "---\n";
    $email_body .= "Sent from: " . $_SERVER['HTTP_HOST'] . "\n";
    $email_body .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $email_body .= "Date: " . date('Y-m-d H:i:s') . "\n";
    
    // Send email using SMTP
    return sendEmailSMTP($to, $email_subject, $email_body, $email, $name, $env);
}

function sendEmailSMTP($to, $subject, $body, $from_email, $from_name, $env) {
    // Check if PHPMailer is available
    $autoload_path = __DIR__ . '/../vendor/autoload.php';
    
    if (!file_exists($autoload_path)) {
        error_log("Composer autoload not found at: $autoload_path");
        return [
            'success' => false,
            'message' => 'PHPMailer not installed'
        ];
    }
    
    require_once $autoload_path;
    
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        return [
            'success' => false,
            'message' => 'PHPMailer class not found'
        ];
    }
    
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    try {
        // SMTP Configuration - All from .env
        $mail->isSMTP();
        $mail->Host = $env['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $env['SMTP_USER'];
        $mail->Password = $env['SMTP_PASS'];
        $mail->SMTPSecure = $env['SMTP_ENCRYPTION'];
        $mail->Port = $env['SMTP_PORT'];
        $mail->CharSet = 'UTF-8';
        
        // Recipients - All from .env
        $mail->setFrom($env['SMTP_FROM'] ?? $env['SMTP_USER'], $from_name);
        $mail->addAddress($to);
        $mail->addReplyTo($from_email, $from_name);
        
        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        $mail->send();
        return ['success' => true];
        
    } catch (Exception $e) {
        $error_msg = "Email sending failed: " . $e->getMessage() . " | PHPMailer: " . ($mail->ErrorInfo ?? 'N/A');
        error_log($error_msg);
        return [
            'success' => false,
            'message' => 'Failed to send email: ' . $mail->ErrorInfo
        ];
    }
}
