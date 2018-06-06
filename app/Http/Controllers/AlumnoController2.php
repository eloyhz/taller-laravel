<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
	function index()	{
		
		$alumnos = Alumno::all();
		// dd($alumnos);
		return view('alumnos.index', ['alumnos' => $alumnos]);

	}

	function alta()
	{
		return view('alumnos.alta');
	}
}
