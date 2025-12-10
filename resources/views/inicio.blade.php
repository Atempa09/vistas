@extends('layouts.app')

@section('title', 'Principal')

@section('content')
    <h1>HOLA, SOY LA VISTA PRINCIPAL</h1>

    <h3>ESTAS SON ALGUNAS OPCIONES DE BOTONES</h3>

    <a href="/vista1">
        <button type="button">VISTA 1</button>
    </a>

    <a href="/vista2">
        <button type="button">VISTA 2</button>
    </a>

    <a href="/suma">
        <button type="button">EJERCICIO DE SUMA DE 2 NUMEROS</button>
    </a>

    <a href="/alumnos">
        <button type="button">VER LA TABLA DE ALUMNOS</button>
    </a>

    <a href="/maestros">
        <button type="button">VER LA TABLA DE MAESTROS</button>
    </a>
@endsection
