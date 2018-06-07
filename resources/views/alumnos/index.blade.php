@extends('principal')

@section('titulo', 'Alumnos')

@section('contenido')

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


