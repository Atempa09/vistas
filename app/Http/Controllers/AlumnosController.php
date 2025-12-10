<?php

namespace App\Http\Controllers;

use App\Models\Alumnos; //Con esto definimos que vamos a consultar este modelo
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    //Inlcuir los métodos necesarios para consultar alumnos
    public function index(){
        $alumnos = Alumnos::all(); //Con esto vamos a consultar los datos, pero debemos tener el modelo a consultar
        return view('alumnos.index', compact('alumnos')); //Con esto le pasamos a la vista la consulta de los alumnos
    }
}
