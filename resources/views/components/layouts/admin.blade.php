<x-layouts.app>
    {{-- Sidebar para Desktop --}}
    <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="/dashboard" logo="https://fluxui.dev/img/demo/logo.png" name="Gestor Ventas" class="px-2" />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="/dashboard" wire:navigate>Inicio</flux:navlist.item>

            <flux:navlist.group label="Inventario" class="mt-4">
                <flux:navlist.item icon="shopping-bag"  :href="route('admin.products.index')" 
                    :current="request()->routeIs('admin.products.*')" wire:navigate>Productos</flux:navlist.item>
                <flux:navlist.item icon="tag" :href="route('admin.categories.index')" 
                    :current="request()->routeIs('admin.categories.*')" wire:navigate>Categorías</flux:navlist.item>
                <flux:navlist.item icon="bookmark" :href="route('admin.brands.index')" 
                    :current="request()->routeIs('admin.brands.*')" wire:navigate>Marcas</flux:navlist.item>
            </flux:navlist.group>

            <flux:navlist.group label="Operaciones" class="mt-4">
                <flux:navlist.item icon="currency-dollar" href="/sales" wire:navigate>Ventas</flux:navlist.item>
               
                <flux:navlist.item 
                    icon="users" 
                    :href="route('admin.users.index')" 
                    :current="request()->routeIs('admin.users.*')" 
                    wire:navigate
                >
                    Usuarios
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <flux:navlist.item as="button" type="submit" icon="arrow-right-start-on-rectangle">
                    Cerrar Sesión
                </flux:navlist.item>
            </form>
        </flux:navlist>
    </flux:sidebar>

    {{-- Header para Móviles (Solo se ve en pantallas chicas) --}}
    <flux:header class="lg:hidden bg-white dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle icon="bars-3" inset="left" />
        <flux:spacer />
        <flux:brand href="/dashboard" logo="https://fluxui.dev/img/demo/logo.png" name="GV" />
    </flux:header>

    {{-- Contenedor Principal Adaptable --}}
    <flux:main>
        <div class="mx-auto w-full max-w-7xl">
            {{ $slot }}
        </div>
    </flux:main>
</x-layouts.app>