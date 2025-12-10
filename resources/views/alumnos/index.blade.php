@extends('layouts.app')

@section('title', 'Alumnos')

@section('content')

	<h1>TABLA DE TODOS LOS ALUMNOS PRESENTES</h1>

	<h3>AQUÍ PODRAS VER TODOS LOS ALUMNOS REGISTRADOS</h3>

	<table class="tabla">
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>RETROALIMENTACION</th>
				<th>CALIFICACIÓN</th>
				<th>ESCUELA</th>
				<th>E-MAIL</th>				
			</tr>	
		</thead>
		<tbody>
			@foreach ($alumnos as $alumno)
				<tr>
					<td>{{ $alumno->id }}</td>
					<td>{{ $alumno->nombre }}</td>
					<td>{{ $alumno->retroalimentacion }}</td>
					<td>{{ $alumno->calificacion }}</td>
					<td>{{ $alumno->escuela }}</td>	
					<td>{{ $alumno->email }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/maestros">
		<button type="button">VER MAESTROS DISPONIBLES</button>
	</a>
@endsection