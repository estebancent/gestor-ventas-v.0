<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Middleware\CheckAdmin;

/*
|--------------------------------------------------------------------------
| Rutas Públicas (La Vitrina)
|--------------------------------------------------------------------------
*/
Volt::route('/', 'home.catalogo')->name('home');

/*
|--------------------------------------------------------------------------
| Rutas Protegidas (Requieren Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Solo Administradores (El "Portero" CheckAdmin)
    |--------------------------------------------------------------------------
    */
    Route::middleware([CheckAdmin::class])->group(function () {
        
        // Dashboard Principal
        Volt::route('/dashboard', 'admin.dashboard')->name('dashboard');

        // Panel Administrativo (Prefijo /admin)
        Route::prefix('admin')->name('admin.')->group(function () {
            
            // Módulo de Usuarios
            Route::prefix('users')->name('users.')->group(function () {
                Volt::route('/', 'admin.users.index')->name('index');
                Volt::route('/create', 'admin.users.create')->name('create');
                Volt::route('/{user}/edit', 'admin.users.edit')->name('edit');
            });

            // Módulo de Categorías
            Route::prefix('categories')->name('categories.')->group(function () {
                Volt::route('/', 'admin.categories.index')->name('index');
            });

            // Módulo de Marcas
            Route::prefix('brands')->name('brands.')->group(function () {
                Volt::route('/', 'admin.brands.index')->name('index');
            });

            // Módulo de Productos
            Route::prefix('products')->name('products.')->group(function () {
                Volt::route('/', 'admin.products.index')->name('index');
                Volt::route('/create', 'admin.products.create')->name('create');
                Volt::route('/{product}/edit', 'admin.products.edit')->name('edit');
            });
        });
    });

    /*
    |--------------------------------------------------------------------------
    | Rutas para Clientes (Opcional)
    |--------------------------------------------------------------------------
    | Aquí podrías poner rutas que solo el cliente logueado puede ver,
    | como "Mis Pedidos" o "Mi Perfil".
    */
    // Volt::route('/mis-pedidos', 'customer.orders')->name('orders');

});