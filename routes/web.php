<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SumaController;

use App\Http\Controllers\AlumnosController;

use App\Http\Controllers\MaestrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('vista1', function () {
    return view('vista1');
});

Route::get('vista2', function () {
    return view('vista2');
});

Route::get('saludos', function () {
    return view('saludos');
});

Route::get('/suma', [SumaController::class,'index']);
Route::post('/suma', [SumaController::class,'suma']);

Route::get('/alumnos', [AlumnosController::class,'index']);

Route::get('/maestros', [MaestrosController::class,'index']);