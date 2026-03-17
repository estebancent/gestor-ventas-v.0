<?php

namespace App\Http\Controllers\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;  
class LoginResponse implements LoginResponseContract, RegisterResponseContract
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        $user = auth()->user();

        // Lógica de redirección por rol
        $redirect = $user->role === 'admin' ? '/dashboard' : '/';

        return redirect()->intended($redirect);
    }
}