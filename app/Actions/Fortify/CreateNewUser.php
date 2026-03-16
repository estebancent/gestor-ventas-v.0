<?php

namespace App\Actions\Fortify;

use App\Concerns\PasswordValidationRules;
use App\Concerns\ProfileValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Hash;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules, ProfileValidationRules;

    /**
     * Valida y crea un nuevo usuario registrado.
     *
     * @param  array<string, string>  $input
     */
   public function create(array $input): User
{
    Validator::make($input, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // Cambiamos 'required' por 'nullable'
        'dni' => ['nullable', 'numeric', 'digits_between:7,15', 'unique:users,dni'],
        'phone' => ['nullable', 'string', 'max:20'],
        'address' => ['nullable', 'string', 'max:255'],
        'password' => $this->passwordRules(),
    ])->validate();

    return User::create([
        'name'      => $input['name'],
        'email'     => $input['email'],
        // Usamos null coalescing para evitar errores si no vienen en el input
        'dni'       => $input['dni'] ?? null,
        'phone'     => $input['phone'] ?? null,
        'address'   => $input['address'] ?? null,
        'password'  => Hash::make($input['password']),
        'role'      => 'client', 
        'is_active' => true,
    ]);
}
}