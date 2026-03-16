<?php
use function Livewire\Volt\{layout, title};

layout('layouts.catalogo');
title('Nuestro Catálogo');
?>

<div>
    <h1 class="text-3xl font-bold mb-6">Explora nuestros productos</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="aspect-square bg-zinc-100 rounded-lg mb-4"></div>
            <h3 class="font-bold">Producto Ejemplo</h3>
            <p class="text-indigo-600 font-bold">$99.99</p>
            <flux:button size="sm" class="mt-4 w-full">Ver detalle</flux:button>
        </div>
         <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="aspect-square bg-zinc-100 rounded-lg mb-4"></div>
            <h3 class="font-bold">Producto Ejemplo</h3>
            <p class="text-indigo-600 font-bold">$99.99</p>
            <flux:button size="sm" class="mt-4 w-full">Ver detalle</flux:button>
        </div>
         <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="aspect-square bg-zinc-100 rounded-lg mb-4"></div>
            <h3 class="font-bold">Producto Ejemplo</h3>
            <p class="text-indigo-600 font-bold">$99.99</p>
            <flux:button size="sm" class="mt-4 w-full">Ver detalle</flux:button>
        </div>
    </div>
</div>