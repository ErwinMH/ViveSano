<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Contracts\Service\Attribute\Required;

class mensajes extends Model
{
    protected $fillable = [
        'nombre_profesional',
        'nombre',
        'mensaje',
    ];
}
