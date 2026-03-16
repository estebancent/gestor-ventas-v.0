<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Si el usuario no está logueado o NO es admin, lo mandamos afuera
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'No tienes permisos para acceder aquí.');
        }

        return $next($request);
    }
}