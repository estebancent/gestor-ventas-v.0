<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name', 'cuit', 'email', 'phone', 'address', 'is_active'];
}
