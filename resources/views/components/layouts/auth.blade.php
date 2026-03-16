<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxAppearance

    <title>Autenticación</title>
</head>

<body class="min-h-screen flex items-center justify-center bg-zinc-100 dark:bg-zinc-900">

    {{ $slot }}

    @fluxScripts

</body>

</html>