<?php
/**
 * Signup Handler
 * Processes newsletter/trial signup requests
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
    
    // Email configuration
    $to = 'info@entropicnetworks.com'; // Marketing email
    $subject = $lang === 'es' 
        ? 'Nueva Solicitud de Prueba Gratuita - Plan Básico' 
        : 'New Free Trial Request - Basic Plan';
    
    // Email body
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
    
    // Email headers
    $headers = "From: no-reply@entropicnetworks.com\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    $sent = mail($to, $subject, $message, $headers);
    
    if ($sent) {
        // Optional: Log successful signup
        error_log("Signup request from: {$email}");
        
        return [
            'success' => true,
            'message' => $lang === 'es' 
                ? '¡Gracias! Nos pondremos en contacto pronto.' 
                : 'Thank you! We will contact you soon.',
            'return_url' => $return_url
        ];
    } else {
        error_log("Failed to send signup email for: {$email}");
        
        return [
            'success' => false,
            'message' => $lang === 'es' 
                ? 'Error al procesar la solicitud. Por favor, inténtelo de nuevo.' 
                : 'Error processing request. Please try again.',
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
