<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Autenticación' }} | {{ config('app.name', 'Tienda') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="min-h-full antialiased bg-zinc-50 dark:bg-zinc-950 relative selection:bg-indigo-100">
    
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[70%] h-[40%] rounded-full bg-indigo-500/5 blur-[100px]"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[70%] h-[40%] rounded-full bg-blue-500/5 blur-[100px]"></div>
    </div>

    <div class="relative z-10 min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        
        <div class="absolute top-4 left-4">
            <flux:button href="/" wire:navigate variant="ghost" icon="arrow-left" size="sm" class="!text-zinc-500">
                <span class="hidden sm:inline">Volver</span>
            </flux:button>
        </div>

        <main class="w-full max-w-md mx-auto px-4">
            <div class="mb-8 text-center">
                <a href="/" wire:navigate class="inline-flex flex-col items-center gap-3 group">
                    <div class="p-3 bg-indigo-600 rounded-2xl shadow-lg group-hover:scale-105 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <span class="text-xl font-black tracking-tighter text-zinc-900 dark:text-white uppercase italic">
                        {{ config('app.name', 'Tienda') }}
                    </span>
                </a>
            </div>

            {{ $slot }}

            <footer class="mt-8 text-center space-y-4">
                <div class="flex justify-center gap-4">
                    <flux:link href="#" class="text-[10px] uppercase tracking-widest !text-zinc-400">Privacidad</flux:link>
                    <flux:link href="#" class="text-[10px] uppercase tracking-widest !text-zinc-400">Ayuda</flux:link>
                </div>
                <p class="text-[10px] text-zinc-400 dark:text-zinc-500 font-bold uppercase tracking-[0.2em]">
                    &copy; {{ date('Y') }} {{ config('app.name') }}
                </p>
            </footer>
        </main>
    </div>

    @fluxScripts
</body>
</html>