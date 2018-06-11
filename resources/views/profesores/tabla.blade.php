<table class='table'>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Opciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($profesores as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->nombreCompleto()}}</td>
				<td>
					{{--  <button 
						onclick="cargaModal('{{ route('profesores.edit', [$a->id]) }}')"
						class="btn btn-success">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</button>  --}}
					<a href="{{ route('profesores.edit', [$p->id]) }}" class="btn btn-success">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</a>
					{{--  <button 
						onclick="borrar('{{ route('profesores.destroy', [$a->id]) }}')"
						class="btn btn-danger">
						<i class="fa fa-trash-o" aria-hidden="true"></i>
					</button>  --}}
					<a onclick="borrar('{{ route('profesores.destroy', [$p->id]) }}')" class="btn btn-danger">
						<i class="fa fa-trash-o" aria-hidden="true"></i>
					</a>
				</td>
			</tr>	
		@endforeach
	</tbody>
</table>