<?php

use function Livewire\Volt\{layout, mount};
use App\Models\Product;
use App\Models\Category;

layout('layouts.app');

mount(function () {
    // Redirección si es cliente
    if (auth()->user()->role === 'client') {
        return redirect()->to('/');
    }
});

?>

<div class="space-y-8">
    {{-- Cabecera --}}
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl" level="1">¡Hola, {{ auth()->user()->name }}! 👋</flux:heading>
            <flux:subheading>Resumen de tu inventario en tiempo real.</flux:subheading>
        </div>
        
        @if(auth()->user()->role === 'admin')
            <flux:button icon="plus" variant="primary" href="/products" wire:navigate>Nuevo Producto</flux:button>
        @endif
    </div>

    {{-- Estadísticas --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        {{-- Card de Productos: Llamamos al conteo directamente aquí --}}
        <flux:card class="space-y-2 bg-white/5 border-white/10 shadow-inner">
            <div class="flex items-center justify-between">
                <flux:heading size="sm">Productos</flux:heading>
                <flux:icon name="shopping-bag" variant="mini" class="text-zinc-400" />
            </div>
            <div class="text-3xl font-bold dark:text-white">
                {{ \App\Models\Product::count() }}
            </div>
            <flux:subheading size="sm">Existencias totales</flux:subheading>
        </flux:card>

        {{-- Card de Categorías: Llamamos al conteo directamente aquí --}}
        <flux:card class="space-y-2 bg-white/5 border-white/10 shadow-inner">
            <div class="flex items-center justify-between">
                <flux:heading size="sm">Categorías</flux:heading>
                <flux:icon name="tag" variant="mini" class="text-zinc-400" />
            </div>
            <div class="text-3xl font-bold dark:text-white">
                {{ \App\Models\Category::count() }}
            </div>
            <flux:subheading size="sm">Rubros creados</flux:subheading>
        </flux:card>

        <flux:card class="space-y-2 bg-white/5 border-white/10 shadow-inner">
            <div class="flex items-center justify-between">
                <flux:heading size="sm">Perfil</flux:heading>
                <flux:icon name="shield-check" variant="mini" class="text-zinc-400" />
            </div>
            <div class="text-2xl font-bold text-blue-500 uppercase">
                {{ auth()->user()->role }}
            </div>
            <flux:subheading size="sm">Nivel de privilegios</flux:subheading>
        </flux:card>
    </div>
</div>