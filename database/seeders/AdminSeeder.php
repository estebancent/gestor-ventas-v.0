<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Tu Nombre Real', // Poné tu nombre acá
            'email'    => 'admin@correo.com', // El mail que vas a usar para loguearte
            'password' => Hash::make('admin123'), // La contraseña (encriptada)
            'role'     => 'admin',
            'phone'    => '123456789',
            'dni'      => 12345678, // Un DNI de prueba o el tuyo
            'address'  => 'Dirección de prueba',
            'is_active' => true,
        ]);

        $this->command->info('Usuario Administrador creado con éxito.');
    }
}
