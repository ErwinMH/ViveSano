<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reginformacion
 *
 * @property $UserId
 * @property $nombre_completo
 * @property $email
 * @property $fecha_nacimiento
 * @property $peso_kg
 * @property $sexo
 * @property $enfermedades
 * @property $tipo_de_cuerpo
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reginformacion extends Model
{
    
    static $rules = [
		'id' => 'required',
		'nombre_completo' => 'required',
		'email' => 'required',
		'fecha_nacimiento' => 'required',
		'peso_kg' => 'required',
		'sexo' => 'required',
		'enfermedades' => 'required',
		'tipo_de_cuerpo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['UserId','nombre_completo','email','fecha_nacimiento','peso_kg','sexo','enfermedades','tipo_de_cuerpo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'UserId');
    }
    

}
