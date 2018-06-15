<table class='table'>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
{{--			<th>Apellido 1</th>
			<th>Apellido 2</th>   --}}
			<th>Carrera</th>
			<th>Foto</th>
			<th>Opciones</th>
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
				<td>{{$a->carrera}}</td>
				<td>
					@if ($a->foto != "")	
						<img src="{{ route('alumno.foto', [$a->id]) }}" style="width: 50px;">
					@endif	
				</td>	
				<td>
					<button 
						onclick="cargaModal('{{ route('alumnos.edit', [$a->id]) }}')"
						class="btn btn-success">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</button>
					<button 
						onclick="borrar('{{ route('alumnos.destroy', [$a->id]) }}')"
						class="btn btn-danger">
						<i class="fa fa-trash-o" aria-hidden="true"></i>
					</button>
				</td>
			</tr>	
		@endforeach
	</tbody>
</table>