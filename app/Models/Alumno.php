<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	protected $table = 'alumnos';
	
	public $timestamps = false;

	protected $fillable = ['nombre', 'apellido1', 'apellido2', 'id_carrera'];

	public function nombreCompleto()	{
		return $this->nombre . ' ' . $this->apellido1 . ' ' . $this->apellido2;
	}


	public function carrera()	{
		return $this->hasOne('App\Models\Carrera', 'id', 'id_carrera')->first();
	}
}
