<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Catálogo' }} | {{ config('app.name') }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 font-['Inter']">
<x-auth-alerts />
    <nav class="sticky top-0 z-50 w-full border-b border-zinc-100 dark:border-zinc-800 bg-white/80 dark:bg-zinc-950/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <div class="flex items-center gap-2">
                    <div class="p-1.5 bg-indigo-600 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight">{{ config('app.name') }}</span>
                </div>

                <div class="hidden md:flex items-center gap-8">
                    <flux:link href="#" class="text-sm font-medium">Novedades</flux:link>
                    <flux:link href="#" class="text-sm font-medium">Categorías</flux:link>
                    <flux:link href="#" class="text-sm font-medium">Ofertas</flux:link>
                </div>

             <div class="flex items-center gap-3">
    @auth
        <flux:dropdown align="end">
            <flux:button variant="ghost" icon-trailing="chevron-down">
                {{ auth()->user()->name }}
            </flux:button>

            <flux:menu>
                @if(auth()->user()->role === 'admin')
                    <flux:menu.item icon="layout-dashboard" href="/dashboard" wire:navigate>
                        Panel de Control
                    </flux:menu.item>
                @endif

                <flux:menu.item icon="user" href="/profile" wire:navigate>
                    Mi Perfil
                </flux:menu.item>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" id="logout-form" class="hidden">
                    @csrf
                </form>

                <flux:menu.item 
                    icon="arrow-right-start-on-rectangle" 
                    variant="danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                >
                    Cerrar Sesión
                </flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    @else
        <flux:link href="{{ route('login') }}" wire:navigate class="text-sm font-semibold mr-2">
            Iniciar Sesión
        </flux:link>
        <flux:button href="{{ route('register') }}" variant="primary" size="sm" wire:navigate>
            Registrarse
        </flux:button>
    @endauth
</div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{ $slot }}
    </main>

    <footer class="border-t border-zinc-100 dark:border-zinc-800 mt-20 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm text-zinc-500">© {{ date('Y') }} {{ config('app.name') }}. Directo a tu puerta.</p>
        </div>
    </footer>

    @fluxScripts
</body>
</html>