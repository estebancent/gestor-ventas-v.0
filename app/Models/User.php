<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use Notifiable, SoftDeletes;
    /**
     * Los atributos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',      // Nuevo
        'dni',        // Nuevo
        'address',    // Nuevo
        'role',       // Nuevo
        'is_active',  // Nuevo
    ];

    /**
     * Los atributos que deben ocultarse para la serialización (JSON, etc).
     */
    protected $hidden = [
        'password',
        'remember_token',
        // Quitamos los de two_factor si borraste la migración
    ];

    /**
     * Los atributos que deben ser casteados.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean', // Es bueno castear los booleanos
        ];
    }

    /**
     * Obtener las iniciales del usuario
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }
}