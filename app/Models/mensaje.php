<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    
    protected $fillable = [
        'id',
        'nombre_profesional',
        'especialidad',
    ];
}
