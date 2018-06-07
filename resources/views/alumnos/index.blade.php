@extends('principal')

@section('titulo', 'Alumnos')

@section('contenido')


<table class='table'>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
{{--			<th>Apellido 1</th>
			<th>Apellido 2</th>   --}}
			<th>Carrera</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($alumnos as $a)
			<tr>
				<td>{{$a->id}}</td>
{{--
				<td>{{$a->nombre}}</td>
				<td>{{$a->apellido1}}</td>
				<td>{{$a->apellido2}}</td>
--}}
				<td>{{$a->nombreCompleto()}}</td>

{{--				<td>{{$a->id_carrera}}</td>  --}}
				<td>{{$a->carrera()->carrera}}</td>
			</tr>	
		@endforeach
	</tbody>
</table>

{{-- <a class="mb-5 btn btn-primary" href="{{route('alumnos.create')}}" role="button">Crear Alumno</a> --}}

      <!-- Button trigger modal -->
	  {{-- <button type="button" class="mb-5 btn btn-primary" data-toggle="modal" data-target="#modalAgregar">
			Crear Alumno
	</button> --}}


	<button class="mb-5 btn btn-primary"  onclick="cargaModal('{{route('alumnos.create')}}')">
		Crear Alumno
	</button>
@endsection


