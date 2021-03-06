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
    public function index(Request $request)
    {
        $carreras = Carrera::all()->pluck('carrera', 'id');
        // dd($alumnos);
        $carreras[0] = 'Todas';

        if (isset($request->carrera))   {
            $carreraSel = $request->carrera;
        }
        else    {
            $carreraSel = 0;
        }
        if ($carreraSel == 0)   {
            $alumnos = Alumno::alumnosCarrera();
        }   
        else    {
            $alumnos = Alumno::alumnosCarrera($carreraSel);
        }
        if ($request->ajax())   {
            return view('alumnos.tabla', ['alumnos' => $alumnos]);
        }   else    {
            return view('alumnos.index', 
            ['alumnos' => $alumnos,
                'carreras' => $carreras,
                'carreraSel' => $carreraSel ]); 

        }
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
      /*  $messages = [
            'required' => '* El campo :attribute es requerido',
            'apellido1.required' => 'El campo Primer Apellido es requerido'
        ];
        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido1' => 'required'
        ], $messages);*/

        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido1' => 'required'
        ]);

        $datos = $request->except('_token');
        // dd($datos);
        $alumno = Alumno::create($datos);
        if ($request->hasFile('foto'))  {
            $nombreArchivo = $alumno->id . "." . $request->foto->extension();
            $request->foto->storeAs('images', $nombreArchivo);
            $alumno->foto = $nombreArchivo;
            $alumno->save();
        }


        // return redirect()->route('alumnos.index');
        $alumnos = Alumno::all();
    //        return view('alumnos.tabla', ['alumnos' => $alumnos]);   
        return redirect(route('alumnos.index'));

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
        // dd($datos);
        $alumno = Alumno::find($id);
        $alumno->fill($datos);

        if ($request->hasFile('foto'))  {
            $nombreArchivo = $alumno->id . "." . $request->foto->extension();
            $request->foto->storeAs('images', $nombreArchivo);
            $alumno->foto = $nombreArchivo;
        }

        $alumno->save();
        $alumnos = Alumno::all();
//        return view('alumnos.tabla', ['alumnos' => $alumnos]);
        return redirect(route('alumnos.index'));
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

    public function foto(Request $request, $id)  {
        $alumno = Alumno::find($id);

        if ($alumno && $alumno->foto != "" && \Storage::exists('images/' . $alumno->foto))
        {
            return \Storage::download('images/' . $alumno->foto);
        }
    }
}
