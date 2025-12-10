<?php

namespace App\Http\Controllers;

use App\Models\Maestros; //Con esto definimos que vamos a consultar este modelo
use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    //Inlcuir los métodos necesarios para consultar los maestros
    public function index(){
        $maestros = Maestros::all(); //Con esto vamos a consultar los datos, pero debemos tener el modelo a consultar
        return view('maestros.index', compact('maestros')); //Con esto le pasamos a la vista la consulta de los maestros
    }
}
