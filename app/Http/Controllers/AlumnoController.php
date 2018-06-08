<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$alumnos = Alumno::all();
		// dd($alumnos);
        return view('alumnos.index', ['alumnos' => $alumnos]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras = Carrera::all()->pluck('carrera', 'id');
        //dd($carreras);
		return view('alumnos.formulario', ['carreras' => $carreras]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->except('_token');
        // dd($datos);
        Alumno::create($datos);
        // return redirect()->route('alumnos.index');
        $alumnos = Alumno::all();
        return view('alumnos.tabla', ['alumnos' => $alumnos]);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $carreras = Carrera::all()->pluck('carrera', 'id');
        return view('alumnos.formulario', ['carreras' => $carreras,
                    'alumno' => $alumno
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->except('_token');
        $alumno = Alumno::find($id);
        $alumno->fill($datos);
        $alumno->save();
        $alumnos = Alumno::all();
        return view('alumnos.tabla', ['alumnos' => $alumnos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();

        $alumnos = Alumno::all();
        return view('alumnos.tabla', ['alumnos' => $alumnos]);
    }
}
