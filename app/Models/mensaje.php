<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensaje
 *
 * @property $id
 * @property $nombre_profesional
 * @property $nombre
 * @property $mensaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensaje extends Model
{
    
    static $rules = [
		'nombre_profesional' => 'required',
		'nombre' => 'required',
		'mensaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_profesional','nombre','mensaje'];



}
