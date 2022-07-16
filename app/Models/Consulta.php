<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $id
 * @property $nombre
 * @property $apPaterno
 * @property $apMaterno
 * @property $fechaConsulta
 * @property $motivo
 * @property $diagnostico
 * @property $tratamiento
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apPaterno' => 'required',
		'apMaterno' => 'required',
		'fechaConsulta' => 'required',
		'motivo' => 'required',
		'diagnostico' => 'required',
		'tratamiento' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apPaterno','apMaterno','fechaConsulta','motivo','diagnostico','tratamiento','observaciones'];



}
