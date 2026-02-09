<?php

namespace App\Http\Controllers;

use App\Models\windaq;

class bdExample extends Controller
{

    public function mostrarBd()
    {
        $windaq = windaq::orderBy('id', 'desc')->get();

        return view('bd', ['windaq' => $windaq]);

    }


    public function agregarDatos()
    {
        $windaq = new windaq();

        $windaq->nombre = 'efcbdkjs';
        $windaq->correo_electronico = 'y23y@gmail.com';
        $windaq->contrasena = 'slxcvsldk';
        $windaq->razon = 'Quiero trading';
        $windaq->campo_nuevo = 'scnsdl';

        $windaq->save();

        return view('bdAgregar', ['windaq' => $windaq]);
    }
}

/* Este controlador se encarga de crear un nuevo registro en la base de datos instaciando primero
    el modelo windaq ubicado en App\Models\windaq, luego, pasa ese registro a la vista 'bd' para mostrar los datos guardados.
*/
