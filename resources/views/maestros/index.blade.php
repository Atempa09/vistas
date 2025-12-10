@extends('layouts.app')

@section('title', 'Maestros')

@section('content')

	<h1>TABLA DE TODOS LOS MAESTROS PRESENTES</h1>

	<h3>AQUÍ PODRAS VER TODOS LOS MAESTROS DISPONIBLES</h3>

	<table class="tabla">
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>MATERIA</th>
				<th>TURNO</th>
				<th>E-MAIL</th>				
			</tr>	
		</thead>
		<tbody>
			@foreach ($maestros as $maestro)
				<tr>
					<td>{{ $maestro->id }}</td>
					<td>{{ $maestro->nombre }}</td>
					<td>{{ $maestro->materia }}</td>
					<td>{{ $maestro->turno }}</td>
					<td>{{ $maestro->email }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

    <a href="/inicio">
		<button type="button">VER LA VISTA PRINCIPAL</button>
	</a>
@endsection