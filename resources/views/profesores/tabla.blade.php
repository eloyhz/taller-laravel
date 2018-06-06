<table class='table'>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($profesores as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->nombreCompleto()}}</td>
			</tr>	
		@endforeach
	</tbody>
</table>