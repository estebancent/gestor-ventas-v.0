<?php

use function Livewire\Volt\{state, layout, mount};
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Provider;
use Illuminate\Support\Facades\Route;
// Evaluamos directamente el string antes de pasarlo a la función layout
layout(auth()->check() && auth()->user()->role === 'admin' ? 'layouts.app' : 'layouts.catalogo');

mount(function () {
    $user = auth()->user();

    if (!$user || $user->role === 'client') {
        return redirect()->to('/');
    }
});

state([
    'totalProducts' => fn () => Product::count(),
    'totalCategories' => fn () => Category::count(),
    'userName' => fn () => auth()->user()->name,
]);

?>