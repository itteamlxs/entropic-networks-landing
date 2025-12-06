<?php
// index.php - Plataforma en progreso estilo corporativo
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma en Progreso</title>
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-900 flex items-center justify-center min-h-screen text-white">
    <div class="bg-blue-800/80 p-10 rounded-xl shadow-lg text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-pulse text-cyan-400">🚧 Plataforma en Progreso 🚧</h1>
        <p class="text-lg md:text-xl mb-6 text-gray-200">Estamos trabajando en algo increíble. ¡Vuelve prontoooo!</p>
        <div class="text-sm opacity-70 text-gray-300">&copy; <?= date('Y') ?> Entropic Networks</div>
    </div>
</body>
</html>
