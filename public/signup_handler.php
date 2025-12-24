<?php
/**
 * Signup Handler
 * Processes newsletter/trial signup requests using PHPMailer
 */

function handleSignupForm($postData) {
    $email = filter_var($postData['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $lang = $postData['lang'] ?? 'en';
    $return_url = $postData['return_url'] ?? '/index.php';
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return [
            'success' => false,
            'message' => $lang === 'es' ? 'Email inválido' : 'Invalid email',
            'return_url' => $return_url
        ];
    }
    
    // Load environment variables
    $env_file = __DIR__ . '/../.env';
    if (!file_exists($env_file)) {
        error_log("Signup: .env file not found");
        return ['success' => false, 'message' => 'Configuration error', 'return_url' => $return_url];
    }
    
    $env = parse_ini_file($env_file);
    
    // Email configuration from .env
    $to = $env['CONTACT_EMAIL'] ?? 'itspport96@gmail.com';
    $subject = $lang === 'es' 
        ? 'Nueva Solicitud de Prueba Gratuita - Plan Básico' 
        : 'New Free Trial Request - Basic Plan';
    
    $message = $lang === 'es' ? "
Nueva solicitud de prueba gratuita recibida:

Email del Cliente: {$email}
Plan Solicitado: Plan Básico (30 días gratis)
Fecha: " . date('Y-m-d H:i:s') . "
Idioma: Español

Acción Requerida:
Por favor, contactar al cliente para completar el proceso de registro.

---
Este es un mensaje automático del sistema de suscripciones.
" : "
New free trial request received:

Customer Email: {$email}
Requested Plan: Basic Plan (30 days free)
Date: " . date('Y-m-d H:i:s') . "
Language: English

Action Required:
Please contact the customer to complete the registration process.

---
This is an automated message from the subscription system.
";
    
    // Send using PHPMailer
    return sendSignupEmail($to, $subject, $message, $email, $env, $lang, $return_url);
}

function sendSignupEmail($to, $subject, $body, $reply_to, $env, $lang, $return_url) {
    $autoload_path = __DIR__ . '/../vendor/autoload.php';
    
    if (!file_exists($autoload_path)) {
        error_log("Signup: Composer autoload not found");
        return ['success' => false, 'message' => 'Configuration error', 'return_url' => $return_url];
    }
    
    require_once $autoload_path;
    
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        error_log("Signup: PHPMailer class not found");
        return ['success' => false, 'message' => 'Configuration error', 'return_url' => $return_url];
    }
    
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
        $mail->setFrom($env['SMTP_FROM'] ?? $env['SMTP_USER'], 'Entropic Networks Signups');
        $mail->addAddress($to);
        $mail->addReplyTo($reply_to, 'Customer');
        
        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        $mail->send();
        
        error_log("Signup email sent successfully to {$to} for customer: {$reply_to}");
        
        return [
            'success' => true,
            'message' => $lang === 'es' 
                ? '¡Gracias! Nos pondremos en contacto pronto.' 
                : 'Thank you! We will contact you soon.',
            'return_url' => $return_url
        ];
        
    } catch (Exception $e) {
        error_log("Signup email failed: " . $e->getMessage() . " | PHPMailer: " . ($mail->ErrorInfo ?? 'N/A'));
        return [
            'success' => false,
            'message' => $lang === 'es' 
                ? 'Error al enviar la solicitud. Intente de nuevo.' 
                : 'Error sending request. Please try again.',
            'return_url' => $return_url
        ];
    }
}

// Process POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup_submit'])) {
    $result = handleSignupForm($_POST);
    $return_url = $result['return_url'];
    
    if ($result['success']) {
        header("Location: {$return_url}?signup=success");
    } else {
        header("Location: {$return_url}?signup=error");
    }
    exit;
}

// Redirect if accessed directly
header('Location: /index.php');
exit;
