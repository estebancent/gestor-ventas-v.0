<?php

use function Livewire\Volt\{layout, with, usesPagination, action,state};
use App\Models\Product;

usesPagination();

layout('components.layouts.admin');


state([
     'products' => fn () => Product::all(),
    'name' => '',
    'description' => ''
]);


?>
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl" level="1">Productos</flux:heading>
            <flux:subheading>Gestiona tu inventario de productos</flux:subheading>
        </div>

        <flux:button variant="primary" icon="plus" href="/products/create" wire:navigate>
            Nuevo Producto
        </flux:button>
    </div>

    <flux:card>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>Nombre</flux:table.column>
                <flux:table.column>Categoría</flux:table.column>
                <flux:table.column>Marca</flux:table.column>
                <flux:table.column>Precio</flux:table.column>
                <flux:table.column>Stock</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($products as $product)
                    <flux:table.row :key="$product->id">
                        <flux:table.cell font="medium">{{ $product->name }}</flux:table.cell>
                        <flux:table.cell>{{ $product->category->name ?? 'Sin categoría' }}</flux:table.cell>
                        <flux:table.cell>{{ $product->brand->name ?? 'Sin marca' }}</flux:table.cell>
                        <flux:table.cell>${{ number_format($product->price, 2) }}</flux:table.cell>
                        <flux:table.cell>{{ $product->stock }}</flux:table.cell>
                        <flux:table.cell>
                            <flux:button
                                variant="ghost"
                                icon="pencil-square"
                                :href="route('admin.products.edit', $product)"
                                wire:navigate
                                class="cursor-pointer hover:text-blue-600"
                            />
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>

        
    </flux:card>