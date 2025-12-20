<?php
/**
 * Script de diagnóstico EMAIL - Accesible vía web
 * http://192.168.10.3/diagnose_email.php
 */

// Solo permitir acceso desde IP local
$allowed_ips = ['127.0.0.1', '::1', '192.168.10.3', '192.168.10.1'];
if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips) && !in_array($_SERVER['SERVER_ADDR'], $allowed_ips)) {
    die('Acceso denegado');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Diagnóstico Email - Entropic Networks</title>
    <style>
        body { font-family: monospace; background: #1e1e1e; color: #fff; padding: 20px; }
        .ok { color: #0f0; }
        .error { color: #f00; }
        .warning { color: #ff0; }
        .info { color: #0ff; }
        pre { background: #000; padding: 10px; border: 1px solid #333; overflow-x: auto; }
        h2 { border-bottom: 2px solid #0f0; padding-bottom: 5px; }
        .box { background: #2a2a2a; padding: 15px; margin: 10px 0; border-left: 4px solid #0f0; }
    </style>
</head>
<body>
<h1>🔍 DIAGNÓSTICO DE EMAIL</h1>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>1. Verificando archivo .env</h2>";
$env_file = __DIR__ . '/../.env';
echo "<div class='box'>";
if (!file_exists($env_file)) {
    echo "<span class='error'>❌ FALLO: .env no existe</span><br>";
    echo "Ruta esperada: $env_file<br>";
    die();
} else {
    echo "<span class='ok'>✅ Archivo .env existe</span><br>";
    echo "Ruta: $env_file<br>";
}
echo "</div>";

echo "<h2>2. Leyendo configuración</h2>";
echo "<div class='box'>";
$env = parse_ini_file($env_file);
if (!$env) {
    echo "<span class='error'>❌ Error al leer .env</span>";
    die();
}
echo "<span class='ok'>✅ Configuración leída correctamente</span><br>";
echo "</div>";

echo "<h2>3. Variables configuradas</h2>";
echo "<div class='box'>";
echo "<table style='color:#fff;'>";
echo "<tr><td><strong>CONTACT_EMAIL:</strong></td><td>" . ($env['CONTACT_EMAIL'] ?? '<span class="error">NO CONFIGURADO</span>') . "</td></tr>";
echo "<tr><td><strong>SMTP_HOST:</strong></td><td>" . ($env['SMTP_HOST'] ?? '<span class="error">NO CONFIGURADO</span>') . "</td></tr>";
echo "<tr><td><strong>SMTP_PORT:</strong></td><td>" . ($env['SMTP_PORT'] ?? '<span class="error">NO CONFIGURADO</span>') . "</td></tr>";
echo "<tr><td><strong>SMTP_USER:</strong></td><td>" . ($env['SMTP_USER'] ?? '<span class="error">NO CONFIGURADO</span>') . "</td></tr>";
echo "<tr><td><strong>SMTP_PASS:</strong></td><td>";
if (isset($env['SMTP_PASS'])) {
    $pass_len = strlen($env['SMTP_PASS']);
    $pass_preview = substr($env['SMTP_PASS'], 0, 4) . '****' . substr($env['SMTP_PASS'], -4);
    echo "$pass_preview (longitud: $pass_len chars)";
    if (strpos($env['SMTP_PASS'], ' ') !== false) {
        echo " <span class='error'>⚠️ CONTIENE ESPACIOS - ESTO ES UN ERROR</span>";
    }
} else {
    echo '<span class="error">NO CONFIGURADO</span>';
}
echo "</td></tr>";
echo "<tr><td><strong>SMTP_FROM:</strong></td><td>" . ($env['SMTP_FROM'] ?? '<span class="error">NO CONFIGURADO</span>') . "</td></tr>";
echo "<tr><td><strong>SMTP_ENCRYPTION:</strong></td><td>" . ($env['SMTP_ENCRYPTION'] ?? '<span class="error">NO CONFIGURADO</span>') . "</td></tr>";
echo "</table>";
echo "</div>";

echo "<h2>4. Verificando PHPMailer</h2>";
echo "<div class='box'>";
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    echo "<span class='error'>❌ vendor/autoload.php NO EXISTE</span><br>";
    echo "Ejecuta: <code>cd /var/www/html && composer require phpmailer/phpmailer</code>";
    die();
}

require_once $autoload;

if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
    echo "<span class='error'>❌ PHPMailer NO está instalado</span>";
    die();
}
echo "<span class='ok'>✅ PHPMailer está disponible</span><br>";
echo "</div>";

echo "<h2>5. Probando conexión SMTP</h2>";
echo "<div class='box'>";
echo "<pre>";

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    // Habilitar debug completo
    $mail->SMTPDebug = 3;
    $mail->Debugoutput = function($str, $level) {
        echo htmlspecialchars($str) . "\n";
    };
    
    // Configurar SMTP
    $mail->isSMTP();
    $mail->Host = $env['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $env['SMTP_USER'];
    $mail->Password = $env['SMTP_PASS'];
    $mail->SMTPSecure = $env['SMTP_ENCRYPTION'] ?? 'tls';
    $mail->Port = intval($env['SMTP_PORT'] ?? 587);
    $mail->CharSet = 'UTF-8';
    
    // Configurar remitente y destinatario
    $mail->setFrom($env['SMTP_USER'], 'Test Entropic Networks');
    $mail->addAddress($env['CONTACT_EMAIL']);
    
    // Contenido del email
    $mail->Subject = 'Email de prueba - ' . date('Y-m-d H:i:s');
    $mail->Body = "Este es un email de prueba del sistema.\n\nServidor: " . $_SERVER['SERVER_NAME'];
    
    echo "\n<span class='info'>--- INTENTANDO ENVIAR EMAIL ---</span>\n";
    
    $mail->send();
    
    echo "</pre>";
    echo "<span class='ok'>✅✅✅ ¡EMAIL ENVIADO EXITOSAMENTE!</span><br>";
    echo "Revisa la bandeja: <strong>" . $env['CONTACT_EMAIL'] . "</strong>";
    
} catch (Exception $e) {
    echo "</pre>";
    echo "<span class='error'>❌ ERROR AL ENVIAR:</span><br>";
    echo "<strong>Mensaje de error:</strong> " . htmlspecialchars($mail->ErrorInfo) . "<br>";
    echo "<strong>Excepción:</strong> " . htmlspecialchars($e->getMessage()) . "<br>";
}
echo "</div>";

echo "<h2>6. Verificando conectividad</h2>";
echo "<div class='box'>";
$smtp_host = $env['SMTP_HOST'] ?? 'smtp.gmail.com';
$smtp_port = $env['SMTP_PORT'] ?? 587;

echo "Intentando conexión a $smtp_host:$smtp_port...<br>";
$connection = @fsockopen($smtp_host, $smtp_port, $errno, $errstr, 10);
if ($connection) {
    echo "<span class='ok'>✅ Puerto $smtp_port está abierto y accesible</span><br>";
    fclose($connection);
} else {
    echo "<span class='error'>❌ No se puede conectar al puerto $smtp_port</span><br>";
    echo "Error: $errstr ($errno)<br>";
    echo "<span class='warning'>⚠️ Tu servidor puede tener el puerto 587 bloqueado por firewall</span>";
}
echo "</div>";

?>

<h2>📝 Recomendaciones</h2>
<div class='box'>
<ul>
    <li>Si ves "CONTIENE ESPACIOS" en SMTP_PASS: elimina los espacios del .env</li>
    <li>Si ves "Authentication failed": verifica que la contraseña de aplicación sea correcta</li>
    <li>Si ves "Could not connect": el firewall puede estar bloqueando el puerto 587</li>
    <li>Después de cambios en .env, recarga esta página</li>
</ul>
</div>

<hr>
<p style='text-align:center;color:#666;'>Entropic Networks - Diagnóstico v1.0</p>

</body>
</html>
