<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectTo(
            guests: '/login',
            users: function() {
                // Esta función reemplaza la lógica del antiguo RedirectIfAuthenticated
                return auth()->user()->role === 'admin' ? '/dashboard' : '/';
            }
        );
    })
     ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    