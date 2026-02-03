<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteraccionesController extends Controller
{
    public function golpear(){

        return view('interacciones.golpear');

    }

    public function saludar($nombre){

        return view('interacciones.saludar', compact('nombre'));

    }
}
