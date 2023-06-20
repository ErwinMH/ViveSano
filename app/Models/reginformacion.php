<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reginformacion extends Model
{
    protected $fillable = [
        'nombre_completo',
        'email',
        'fecha_nacimiento',
        'peso_kg',
        'sexo',
        'enfermedades',
        'tipo_de_cuerpo',

    ];
}
