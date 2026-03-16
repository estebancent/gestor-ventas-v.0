<?php
use function Livewire\Volt\{state, rules, layout};
use App\Models\Brand;


layout('components.layouts.admin');

state([
    'brands' => fn () => Brand::all(),
    'name' => '',
    'description' => ''
]);

rules(['name' => 'required|min:3']);

$save = function () {
    $this->validate();
    Brand::create([
        'name' => $this->name,
        'description' => $this->description,
        'is_active' => true,
    ]);
    $this->reset(['name', 'description']);
    $this->brands = Brand::all();
    $this->dispatch('modal-close', name: 'create-brand'); 
};
?>

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <flux:heading size="xl">Marcas</flux:heading>
            <flux:subheading>Gestiona las marcas de tus productos</flux:subheading>
        </div>
        
        <flux:modal.trigger name="create-brand">
            <flux:button icon="plus" variant="primary">Nueva Marca  </flux:button>
        </flux:modal.trigger>
    </div>

    <flux:card>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>Nombre</flux:table.column>
                <flux:table.column>Descripción</flux:table.column>
                <flux:table.column>Estado</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($brands as $brand)
                    <flux:table.row :key="$brand->id">
                        <flux:table.cell font="medium">{{ $brand->name }}</flux:table.cell>
                        <flux:table.cell>{{ $brand->description ?? 'Sin descripción' }}</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge :color="$brand->is_active ? 'green' : 'red'" >
                                {{ $brand->is_active ? 'Activo' : 'Inactivo' }}
                            </flux:badge>
                        </flux:table.cell>
                        <flux:table.cell>
                            <flux:button.group>
                                <flux:button variant="ghost" icon="pencil-square" wire:click="edit({{ $brand->id }})" />
                                <flux:button variant="ghost" icon="trash" class="text-red-500 hover:text-red-600" 
                                    wire:confirm="¿Estás seguro de eliminar esta marca?" 
                                    wire:click="$wire.delete({{ $brand->id }})" />
                            </flux:button.group>
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </flux:card>

    <flux:modal name="create-brand" class="md:w-[25rem]">
        <form wire:submit="save" class="space-y-6">
            <div>
                <flux:heading size="lg">Nueva Marca </flux:heading>
                <flux:subheading>Define un nombre para organizar tus productos.</flux:subheading>
            </div>

            <flux:input wire:model="name" label="Nombre" placeholder="Ej. Bebidas, Limpieza..." />
            <flux:textarea wire:model="description" label="Descripción (Opcional)" />

            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary">Guardar Marca</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
