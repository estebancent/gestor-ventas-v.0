<?php
use function Livewire\Volt\{layout, state, mount,action, rules};
use App\Models\User;

layout('components.layouts.admin');

// Inicializamos el estado vacío, pero lo llenaremos en el mount
state([
    'user' => null,
    'name' => '',
    'email' => '',
    'phone' => '',
    'dni' => '',
    'address' => '',
    'role' => '',
    'is_active' => false,
]);

mount(function (User $user) {

    $this->user = $user;

    $this->name = $user->name;
    $this->email = $user->email;
    $this->phone = $user->phone;
    $this->dni = $user->dni;
    $this->address = $user->address;
    $this->role = $user->role;
    $this->is_active = (bool) $user->is_active;

});

$update = action(function () {

    $this->validate([
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email,' . $this->user->id,
        'dni' => 'required|unique:users,dni,' . $this->user->id,
        'role' => 'required',
    ]);

    $this->user->update([
        'name' => $this->name,
        'email' => $this->email,
        'phone' => $this->phone,
        'dni' => $this->dni,
        'address' => $this->address,
        'role' => $this->role,
        'is_active' => $this->is_active,
    ]);

    return redirect()->route('admin.users.index');
});
?>

<div class="max-w-3xl mx-auto space-y-6">
    <flux:heading size="xl">Editar Usuario: {{ $name }}</flux:heading>
    <flux:card>
        {{-- Quitamos el <form> nativo para evitar conflictos con el submit y usamos el helper de Flux --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <flux:input wire:model="name" label="Nombre" class="md:col-span-2" />
            <flux:input wire:model="email" label="Email" />
            <flux:input wire:model="dni" label="DNI" />
            <flux:input wire:model="phone" label="Teléfono" />
            
            <flux:select wire:model="role" label="Rol">
                <flux:select.option value="client">Cliente</flux:select.option>
                <flux:select.option value="employee">Empleado</flux:select.option>
                <flux:select.option value="admin">Administrador</flux:select.option>
            </flux:select>

            <flux:input wire:model="address" label="Dirección" class="md:col-span-2" />

            <div class="md:col-span-2 flex items-center gap-4 py-2">
                <flux:switch wire:model="is_active" label="Usuario Activo" />
            </div>

            <div class="md:col-span-2 flex justify-end gap-2">
                <flux:button href="/admin/users" variant="ghost" wire:navigate>Cancelar</flux:button>
                <flux:button wire:click="update" variant="primary" class="cursor-pointer">Actualizar Datos</flux:button>
            </div>
        </div>
    </flux:card>
</div>