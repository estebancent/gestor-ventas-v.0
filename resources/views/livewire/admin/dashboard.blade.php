<?php

use function Livewire\Volt\{layout, mount, with};
use App\Models\Product;
use App\Models\Category;

layout('components.layouts.admin');

mount(function () {
    if (auth()->user()->role !== 'admin') {
        return redirect()->to('/dashboard');
    }
});

with(fn () => [
    'totalProducts' => Product::count(),
    'totalCategories' => Category::count(),
    'userName' => auth()->user()->name,
]);
?>

<div class="space-y-6 md:space-y-8">
    {{-- Cabecera Flexible --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <flux:heading size="xl" level="1">¡Hola, {{ $userName }}!</flux:heading>
            <flux:subheading>Resumen de actividad del sistema.</flux:subheading>
        </div>
        <flux:button icon="plus" variant="primary" href="/products" wire:navigate class="w-full sm:w-auto">
            Nuevo Producto
        </flux:button>
    </div>

    {{-- Grid Inteligente: 1 col en móvil, 3 en desktop --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
        <flux:card class="flex flex-col justify-center py-6">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-blue-500/10 rounded-lg">
                    <flux:icon name="shopping-bag" class="text-blue-600 dark:text-blue-400" />
                </div>
                <div>
                    <flux:heading size="sm">Productos</flux:heading>
                    <div class="text-3xl font-bold">{{ $totalProducts }}</div>
                </div>
            </div>
        </flux:card>

        <flux:card class="flex flex-col justify-center py-6">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-emerald-500/10 rounded-lg">
                    <flux:icon name="tag" class="text-emerald-600 dark:text-emerald-400" />
                </div>
                <div>
                    <flux:heading size="sm">Categorías</flux:heading>
                    <div class="text-3xl font-bold">{{ $totalCategories }}</div>
                </div>
            </div>
        </flux:card>

        <flux:card class="flex flex-col justify-center py-6 sm:col-span-2 lg:col-span-1">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-purple-500/10 rounded-lg">
                    <flux:icon name="user-circle" class="text-purple-600 dark:text-purple-400" />
                </div>
                <div>
                    <flux:heading size="sm">Rol de Usuario</flux:heading>
                    <div class="text-xl font-bold uppercase text-purple-600">{{ auth()->user()->role }}</div>
                </div>
            </div>
        </flux:card>
    </div>

    {{-- Banner de Próximamente (Responsive) --}}
    <flux:card class="p-8 md:p-16 border-dashed border-2 flex flex-col items-center text-center">
        <flux:icon name="presentation-chart-line" size="xl" class="text-zinc-300 mb-4" />
        <flux:heading variant="subtle">Estadísticas en camino</flux:heading>
        <flux:subheading class="max-w-md">Estamos preparando los gráficos de ventas para que puedas analizar tu negocio desde cualquier lugar.</flux:subheading>
    </flux:card>
</div>