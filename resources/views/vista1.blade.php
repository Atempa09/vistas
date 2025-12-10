@extends('layouts.app')

@section('title', 'Vista 1')

@section('content')
    <h1>HOLA, SOY LA VISTA NUMERO 1</h1>

    <h3>BIENVENIDOS AL MENU DE BOTONES</h3>

    <a href="inicio">
		<button type="button">PRINCIPAL</button>
	</a>

    <a href="/vista2">
		<button type="button">VISTA 2</button>
	</a>
@endsection
