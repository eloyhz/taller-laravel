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


	// public function carrera()	{
	// 	return $this->hasOne('App\Models\Carrera', 'id', 'id_carrera')->first();
	// }

	static public function alumnosCarrera($id_carrera = NULL)	{
		$alumnos = Alumno::join('carreras', 'id_carrera', 'carreras.id')
						->select('alumnos.*', 'carreras.carrera')
						->orderby('nombre')
						->orderby('apellido1')
						->orderby('apellido2');
		if ($id_carrera)	{
			$alumnos->where('id_carrera', $id_carrera);
		}
		return $alumnos->get();
	}
}
