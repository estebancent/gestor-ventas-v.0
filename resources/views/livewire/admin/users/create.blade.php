<?php

use function Livewire\Volt\{layout, state, rules};
use App\Models\User;
use Illuminate\Support\Facades\Hash;

layout('components.layouts.admin');

state([
    'name' => '',
    'email' => '',
    'dni' => '',
    'phone' => '',
    'address' => '',
    'password' => '',
    'role' => 'employee',
    'successMessage' => null,
]);

rules([
    'name' => 'required|string|min:3|max:255',
    'email' => 'required|email|max:255|unique:users,email',
    'dni' => 'required|string|max:20|unique:users,dni',
    'phone' => 'nullable|string|max:20',
    'address' => 'nullable|string|max:255',
    'password' => 'required|min:6',
    'role' => 'required|in:admin,employee,client',
]);

$save = function () {

    $validated = $this->validate();

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'dni' => $validated['dni'],
        'phone' => $validated['phone'],
        'address' => $validated['address'],
        'password' => Hash::make($validated['password']),
        'role' => $validated['role'],
        'is_active' => true,
    ]);

    // limpiar formulario
    $this->reset([
        'name',
        'email',
        'dni',
        'phone',
        'address',
        'password'
    ]);

    // disparar evento para el toast
    $this->dispatch('user-created');
};
?>

<div class="max-w-2xl mx-auto space-y-6">

<flux:heading size="xl">
Crear Nuevo Usuario
</flux:heading>

<flux:card>

<form wire:submit="save" class="space-y-5">

<div>
<flux:input
wire:model="name"
label="Nombre Completo"
placeholder="Ej: Juan Pérez"
/>
@error('name')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<div>
<flux:input
wire:model="email"
type="email"
label="Correo Electrónico"
/>
@error('email')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<div>
<flux:input
wire:model="dni"
label="DNI"
/>
@error('dni')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<div>
<flux:input
wire:model="phone"
label="Teléfono"
/>
@error('phone')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<div>
<flux:input
wire:model="address"
label="Dirección"
/>
@error('address')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<div>
<flux:select wire:model="role" label="Rol">

<flux:select.option value="admin">
Administrador
</flux:select.option>

<flux:select.option value="employee">
Empleado
</flux:select.option>

<flux:select.option value="client">
Cliente
</flux:select.option>

</flux:select>

@error('role')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror

</div>

<div>
<flux:input
wire:model="password"
type="password"
label="Contraseña"
/>

@error('password')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<div class="flex justify-end gap-3 pt-4">

<flux:button
href="/admin/users"
variant="ghost"
wire:navigate
class="cursor-pointer"
>
Cancelar
</flux:button>

<flux:button
type="submit"
variant="primary"
wire:loading.attr="disabled"
class="cursor-pointer"
>

<span wire:loading.remove>
Crear Usuario
</span>

<span wire:loading class="flex items-center gap-2">

<svg
class="animate-spin h-4 w-4"
viewBox="0 0 24 24"
fill="none"
>
<circle
cx="12"
cy="12"
r="10"
stroke="currentColor"
stroke-width="4"
class="opacity-25"
/>

<path
fill="currentColor"
class="opacity-75"
d="M4 12a8 8 0 018-8v8z"
/>

</path>

</svg>

Creando...

</span>

</flux:button>

</div>

</form>

</flux:card>

</div>

<script>

window.addEventListener('user-created', () => {

Swal.fire({
toast: true,
position: 'top-end',
icon: 'success',
title: 'Usuario creado correctamente',
showConfirmButton: false,
timer: 2000
})

})

</script>