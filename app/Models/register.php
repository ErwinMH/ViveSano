<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'user',
        'password',
    ];
}
