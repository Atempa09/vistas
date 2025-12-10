@extends('layouts.app')

@section('title', 'Vista 2')

@section('content')
    <h1>HOLA, SOY LA VISTA NUMERO 2</h1>

    <h3>BIENVENIDOS AL MENU DE BOTONES</h3>

    <a href="inicio">
		<button type="button">PRINCIPAL</button>
	</a>

    <a href="/vista1">
		<button type="button">VISTA 1</button>
	</a>
@endsection
