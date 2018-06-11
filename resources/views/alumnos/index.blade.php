@extends('principal')

@section('titulo', 'Alumnos')

@section('contenido')

<?php
	$url = route('alumnos.index');
	$funJS = "consultaDatos('". $url ."','carrera='+$('#id_carreraIndex').val())";
?>
	{!! Form::label('id_carreraIndex', 'Carrera: ') !!}
	{!! Form::select('id_carreraIndex', 
						$carreras, 	
						$carreraSel, 
						['onchange' => $funJS])  
	!!}

<div id="tabla">
	@include('alumnos.tabla')
</div>

{{-- <a class="mb-5 btn btn-primary" href="{{route('alumnos.create')}}" role="button">Crear Alumno</a> --}}
	  {{-- <button type="button" class="mb-5 btn btn-primary" data-toggle="modal" data-target="#modalAgregar">
			Crear Alumno
	</button> --}}


	<button class="mb-5 btn btn-primary"  onclick="cargaModal('{{route('alumnos.create')}}')">
		Crear Alumno
	</button>
@endsection


