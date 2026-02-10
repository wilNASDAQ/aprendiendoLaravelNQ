<?php

namespace App\Http\Controllers;

use App\Models\windaq;
use Illuminate\Http\Request;

class bdExample extends Controller
{
    /* Este controlador se encarga de crear un nuevo registro en la base de datos instaciando primero
    el modelo windaq ubicado en App\Models\windaq, luego, pasa ese registro a la vista 'bd' para mostrar los datos guardados.
*/

/* El método mostrarBd obtiene todos los registros de la tabla asociada al modelo windaq, ordenados por el campo 'id' en orden ascendente, y luego los pasa a la vista 'bd' para su visualización, tambien guarda el modelo windaq en una variable llamada windaq para llamarla en las vistas */

    public function mostrarBd()
    {
        $windaq = windaq::orderBy('id', 'desc')->get();

        return view('bd', ['windaq' => $windaq]);


    }


    public function bdFormulario()
    {
        return view('bdFormulario');
    }

    /* El método guardarDatos se encarga de validar los datos recibidos del formulario, luego crea una nueva instancia del modelo windaq, asigna los valores validados a las propiedades del modelo y finalmente guarda el registro en la base de datos, después de guardar, redirige al usuario a la ruta '/bdMostrar' para mostrar los datos guardados, ES IMPORTANTE SABER QUE, cuando un dato no esta validado no se guarda a la bd, por lo tanto en el formulario no se redirije a ningun lado y se mostrara un error  */

    public function guardarDatos(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'correo_electronico' => ['required', 'email', 'max:150', 'unique:usuarios,correo_electronico'],
            'contrasena' => ['required', 'string', 'min:8', 'max:100'],
            'razon' => ['required', 'string', 'max:255'],
            'campo_nuevo' => ['required', 'string', 'max:100'],
        ]);

        $windaq = new windaq();
        $windaq->nombre = $validated['nombre'];
        $windaq->correo_electronico = $validated['correo_electronico'];
        $windaq->contrasena = $validated['contrasena'];
        $windaq->razon = $validated['razon'];
        $windaq->campo_nuevo = $validated['campo_nuevo'];
        $windaq->save();

        return redirect('/bdMostrar');
    }


    public function buscarDatosPorId($id)
    {
        $windaq = windaq::find($id);

        return $windaq-> nombre .' ' . $windaq -> created_at->format('Y-m-d');
    }
}
/*     */

