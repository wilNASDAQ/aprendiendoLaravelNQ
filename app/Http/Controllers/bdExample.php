<?php

namespace App\Http\Controllers;

use App\Models\windaq;

class bdExample extends Controller
{

    public function mostrarBd()
    {
        $windaq = windaq::orderBy('id', 'asc')->get();

        return view('bd', ['windaq' => $windaq]);

    }


    public function agregarDatos()
    {
        $windaq = new windaq();

        $windaq->nombre = 'Vinicius';
        $windaq->correo_electronico = 'kxjuds@gmail.com';
        $windaq->contrasena = 'realmadrid';
        $windaq->razon = 'Quiero trading';
        $windaq->campo_nuevo = 'fifa';

        $windaq->save();

        return view('bdAgregar', ['windaq' => $windaq]);

    }

    public function buscarDatosPorId($id)
    {
        $windaq = windaq::find($id);

        return $windaq-> nombre .' ' . $windaq -> created_at->format('Y-m-d');
    }
}

/* Este controlador se encarga de crear un nuevo registro en la base de datos instaciando primero
    el modelo windaq ubicado en App\Models\windaq, luego, pasa ese registro a la vista 'bd' para mostrar los datos guardados.
*/
