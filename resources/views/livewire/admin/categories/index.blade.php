<?php
use function Livewire\Volt\{state, rules, layout}; // Quitamos 'action' porque no se usa así
use App\Models\Category;

layout('components.layouts.admin');

state([
    'categories' => fn () => Category::orderBy('id', 'desc')->get(),
    'name' => '',
    'description' => ''
]);

rules(['name' => 'required|min:3|unique:categories,name']);

// La función DEBE definirse como una variable con el mismo nombre que usas en el wire:click
$save = function () {
    $this->validate();

    Category::create([
        'name' => $this->name,
        'description' => $this->description,
        'is_active' => true,
    ]);

    $this->name = '';
    $this->description = '';
    $this->categories = Category::orderBy('id', 'desc')->get();

    $this->dispatch('modal-close', name: 'create-category'); 
    session()->flash('success', '¡Categoría creada correctamente!');
};

$delete = function ($id) {
    Category::find($id)->delete();
    $this->categories = Category::orderBy('id', 'desc')->get();
    session()->flash('success', 'Categoría eliminada.');
};
?>

<div class="p-6">
    {{-- El HTML se mantiene igual, pero ahora la lógica PHP es válida --}}
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="mb-4">
            <flux:card variant="subtle" class="!bg-green-50 !border-green-200 !py-3">
                <div class="flex items-center gap-2 text-green-700">
                    <flux:icon.check-circle variant="mini" />
                    <span class="text-sm font-medium">{{ session('success') }}</span>
                </div>
            </flux:card>
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <div>
            <flux:heading size="xl">Categorías</flux:heading>
            <flux:subheading>Gestiona las categorías de tus productos</flux:subheading>
        </div>
        
        <flux:modal.trigger name="create-category">
            <flux:button icon="plus" variant="primary">Nueva Categoría</flux:button>
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
                @forelse ($categories as $category)
                    <flux:table.row :key="$category->id">
                        <flux:table.cell font="medium">{{ $category->name }}</flux:table.cell>
                        <flux:table.cell>{{ $category->description ?? 'Sin descripción' }}</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge :color="$category->is_active ? 'green' : 'red'">
                                {{ $category->is_active ? 'Activa' : 'Inactiva' }}
                            </flux:badge>
                        </flux:table.cell>
                        <flux:table.cell>
                            <flux:button.group>
                                <flux:button variant="ghost" icon="pencil-square" size="sm" />
                                <flux:button variant="ghost" icon="trash" size="sm" class="text-red-500" 
                                    wire:confirm="¿Seguro?" 
                                    wire:click="delete({{ $category->id }})" />
                            </flux:button.group>
                        </flux:table.cell>
                    </flux:table.row>
                @empty
                    <flux:table.row>
                        <flux:table.cell colspan="4" class="text-center py-8 text-zinc-400">
                            No hay categorías registradas.
                        </flux:table.cell>
                    </flux:table.row>
                @endforelse
            </flux:table.rows>
        </flux:table>
    </flux:card>

    <flux:modal name="create-category" class="md:w-[25rem]">
        <div class="space-y-6">
            <flux:heading size="lg">Nueva Categoría</flux:heading>

            <flux:input wire:model="name" label="Nombre" placeholder="Ej: Bebidas" />
            <flux:textarea wire:model="description" label="Descripción" />

            <div class="flex">
                <flux:spacer />
                {{-- Importante: El wire:click="save" busca la variable $save de arriba --}}
                <flux:button wire:click="save" variant="primary" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="save">Guardar</span>
                    <span wire:loading wire:target="save" class="flex items-center gap-2">
                        <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Guardando...
                    </span>
                </flux:button>
            </div>
        </div>
    </flux:modal>
</div>