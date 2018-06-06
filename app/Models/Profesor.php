<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
	protected $table = 'profesores';
	
	public $timestamps = false;

	protected $fillable = ['nombre', 'apellido1', 'apellido2'];

	public function nombreCompleto()	{
		return $this->nombre . ' ' . $this->apellido1 . ' ' . $this->apellido2;
	}

}
