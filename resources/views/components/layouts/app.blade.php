<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ $title ?? config('app.name') }}</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

@fluxAppearance

<script>
document.documentElement.classList.toggle(
'dark',
window.matchMedia('(prefers-color-scheme: dark)').matches
);
</script>

@livewireStyles

</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 antialiased">

{{ $slot }}

@fluxScripts
@livewireScripts

</body>
</html>