<?php

use function Livewire\Volt\{layout, with, usesPagination, action};
use App\Models\User;

usesPagination();

layout('components.layouts.admin');

/*
|--------------------------------------------------------------------------
| Data
|--------------------------------------------------------------------------
*/

with(fn () => [
    'users' => User::latest()->paginate(10),
]);

/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$toggleStatus = action(function ($id = null) {

    $user = User::findOrFail($id);

    $user->is_active = ! $user->is_active;

    $user->save();

});
?>

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex items-center justify-between">

        <div>
            <flux:heading size="xl" level="1">
                Gestión de Usuarios
            </flux:heading>

            <flux:subheading>
                Control de acceso y estado de cuentas.
            </flux:subheading>
        </div>

        <flux:button
            variant="primary"
            icon="user-plus"
            :href="route('admin.users.create')"
            wire:navigate
        >
            Nuevo Usuario
        </flux:button>

    </div>

    {{-- Card --}}
    <flux:card class="p-0 overflow-hidden">

        <flux:table>

            {{-- Columns --}}
            <flux:table.columns>
                <flux:table.column>Usuario / DNI</flux:table.column>
                <flux:table.column>Rol</flux:table.column>
                <flux:table.column>Estado</flux:table.column>
                <flux:table.column>Email</flux:table.column>
                <flux:table.column>Acciones</flux:table.column>
            </flux:table.columns>

            {{-- Rows --}}
            <flux:table.rows>

                @foreach ($users as $user)

                    <flux:table.row :key="$user->id">

                        {{-- Usuario --}}
                        <flux:table.cell>
                            <div class="flex flex-col">
                                <span class="font-semibold">
                                    {{ $user->name }}
                                </span>

                                <span class="text-xs text-zinc-500 font-mono">
                                    {{ $user->dni ?? 'S/D' }}
                                </span>
                            </div>
                        </flux:table.cell>


                        {{-- Rol --}}
                        <flux:table.cell>

                            @php
                                $color = match($user->role) {
                                    'admin' => 'blue',
                                    'employee' => 'purple',
                                    default => 'yellow',
                                };
                            @endphp

                            <flux:badge
                                :color="$color"
                                variant="pill"
                                size="sm"
                                class="uppercase font-bold"
                            >
                                {{ $user->role }}
                            </flux:badge>

                        </flux:table.cell>


                        {{-- Estado --}}
                        <flux:table.cell>

                            <div class="flex items-center gap-2">

                                <div class="h-2 w-2 rounded-full
                                    {{ $user->is_active
                                        ? 'bg-emerald-500 animate-pulse'
                                        : 'bg-red-500' }}">
                                </div>

                                <span class="text-sm font-medium
                                    {{ $user->is_active
                                        ? 'text-emerald-600'
                                        : 'text-red-600' }}">
                                    {{ $user->is_active ? 'Activo' : 'Inactivo' }}
                                </span>

                            </div>

                        </flux:table.cell>


                        {{-- Email --}}
                        <flux:table.cell>
                            {{ $user->email }}
                        </flux:table.cell>


                        {{-- Acciones --}}
                        <flux:table.cell>

                            <div class="flex items-center gap-2">

                                {{-- Editar --}}
                                <flux:button
                                    variant="ghost"
                                    icon="pencil-square"
                                    :href="route('admin.users.edit', $user)"
                              
                                    class="cursor-pointer hover:text-blue-600"
                                />

                                {{-- Activar / Desactivar --}}
                             <flux:button
                                    x-data
                                    @click="
                                        Swal.fire({
                                            title: '¿Cambiar estado?',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Sí'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $el.closest('tr').querySelector('[data-toggle]').click()
                                            }
                                        })
                                    "
                                    :color="$user->is_active ? 'red' : 'green'"
                                    :icon="$user->is_active ? 'user-minus' : 'user-plus'"
                                    variant="ghost"
                                />

                                <button
    hidden
    data-toggle
    wire:click="toggleStatus({{ $user->id }})"
></button>
                            </div>

                        </flux:table.cell>

                    </flux:table.row>

                @endforeach

            </flux:table.rows>

        </flux:table>

        {{-- Pagination --}}
        <div class="p-4">
            {{ $users->links() }}
        </div>

    </flux:card>

</div>