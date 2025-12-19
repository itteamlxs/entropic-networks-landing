<?php
/**
 * Contact Form Handler
 * Procesa el formulario de contacto y envía email a support@entropicnetworks.com
 */

function handleContactForm($post_data) {
    // Load environment variables
    $env_file = __DIR__ . '/../.env';
    if (file_exists($env_file)) {
        $env = parse_ini_file($env_file);
    } else {
        return [
            'success' => false,
            'message' => 'Configuration file not found'
        ];
    }
    
    // Validate and sanitize inputs
    $name = filter_var(trim($post_data['name'] ?? ''), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($post_data['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($post_data['subject'] ?? ''), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($post_data['message'] ?? ''), FILTER_SANITIZE_STRING);
    
    // Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        return [
            'success' => false,
            'message' => 'All fields are required'
        ];
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return [
            'success' => false,
            'message' => 'Invalid email address'
        ];
    }
    
    // Prepare email
    $to = $env['CONTACT_EMAIL'] ?? 'support@entropicnetworks.com';
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
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email using SMTP if configured, otherwise use mail()
    if (isset($env['SMTP_HOST']) && !empty($env['SMTP_HOST'])) {
        return sendEmailSMTP($to, $email_subject, $email_body, $email, $name, $env);
    } else {
        // Fallback to PHP mail()
        if (mail($to, $email_subject, $email_body, $headers)) {
            return ['success' => true];
        } else {
            return [
                'success' => false,
                'message' => 'Failed to send email. Please try again later.'
            ];
        }
    }
}

function sendEmailSMTP($to, $subject, $body, $from_email, $from_name, $env) {
    // Check if PHPMailer is available
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        // Fallback to basic mail() if PHPMailer not available
        $headers = "From: $from_email\r\n";
        $headers .= "Reply-To: $from_email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        if (mail($to, $subject, $body, $headers)) {
            return ['success' => true];
        } else {
            return [
                'success' => false,
                'message' => 'Failed to send email'
            ];
        }
    }
    
    // Use PHPMailer for SMTP
    $autoload_path = __DIR__ . '/../vendor/autoload.php';
    
    if (!file_exists($autoload_path)) {
        error_log("Composer autoload not found at: $autoload_path");
        // Fallback to basic mail()
        $headers = "From: $from_email\r\n";
        $headers .= "Reply-To: $from_email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        if (mail($to, $subject, $body, $headers)) {
            return ['success' => true];
        } else {
            return [
                'success' => false,
                'message' => 'Failed to send email'
            ];
        }
    }
    
    require_once $autoload_path;
    
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = $env['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $env['SMTP_USER'];
        $mail->Password = $env['SMTP_PASS'];
        $mail->SMTPSecure = $env['SMTP_ENCRYPTION'] ?? 'tls';
        $mail->Port = $env['SMTP_PORT'] ?? 587;
        $mail->CharSet = 'UTF-8';
        
        // Recipients
        $mail->setFrom($env['SMTP_FROM'] ?? $from_email, $from_name);
        $mail->addAddress($to);
        $mail->addReplyTo($from_email, $from_name);
        
        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        $mail->send();
        return ['success' => true];
        
    } catch (Exception $e) {
        error_log("Email sending failed: " . $e->getMessage());
        return [
            'success' => false,
            'message' => 'Failed to send email. Please try again later.'
        ];
    }
}
