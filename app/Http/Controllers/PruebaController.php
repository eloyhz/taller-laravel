<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function index($nombre, $apellido='Hernandez')  {
        $nombre = strtoupper($nombre);
        return view('prueba.uno', ['nombre' => $nombre, 'apellido' => $apellido]);

    }
}
