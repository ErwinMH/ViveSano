<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesionales extends Model
{
    protected $fillable = [
        'id',
        'id_profesional',
        'nombre_usuario',
        'mensaje',
    ];
}
