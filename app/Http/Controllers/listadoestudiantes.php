<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listadoestudiantes extends Controller
{
    //
    public function index(){
        return view ('listadoestudiantes/listadoestudiantes');
    }
}
