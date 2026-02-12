<?php

namespace App\Http\Controllers;

use App\Models\windaq;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class bdExample extends Controller
{
    /* Este controlador se encarga de crear un nuevo registro en la base de datos instaciando primero
    el modelo windaq ubicado en App\Models\windaq, luego, pasa ese registro a la vista 'bd' para mostrar los datos guardados.
*/

/* El método mostrarBd obtiene todos los registros de la tabla asociada al modelo windaq, ordenados por el campo 'id' en orden ascendente, y luego los pasa a la vista 'bd' para su visualización, tambien guarda el modelo windaq en una variable llamada windaq para llamarla en las vistas */

    public function mostrarBd()
    {
        $windaq = windaq::orderBy('id', 'asc')->paginate(10);

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


    /* El método editarDatos recibe un parámetro $windaq osea un modelo, que este se obtiene cuando le damos a ediar al usuario,
    luego busca el registro correspondiente en la base de datos utilizando el método find del modelo windaq, 
    y finalmente pasa ese registro a la vista 'bdEditar' para mostrar los datos en un formulario de edición */

    public function editarDatos(windaq $windaq)
    {
        return view('bdEditar',compact('windaq'));
    }

    /* El método actualizarDatos recibe una solicitud HTTP y un parámetro windaq osea un modelo, que se obtiene del formulario de 
    edición,valida los datos recibidos del formulario, y con el metodo update mete los datos validados en el modelo y actualiza la bd, finalmente redirige al usuario a la ruta '/bdMostrar' para mostrar los datos actualizados */
    
    public function actualizarDatos(Request $request,windaq $windaq)
    {
        
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'correo_electronico' => ['required', 'email', 'max:150', 'unique:usuarios,correo_electronico,' . $windaq->id],
            'contrasena' => ['required', 'string', 'min:8', 'max:100'],
            'razon' => ['required', 'string', 'max:255'],
            'campo_nuevo' => ['required', 'string', 'max:100'],
        ]);

        $windaq->update($validated);

        return redirect('/bdMostrar');
    }

    public function eliminarDatos(windaq $windaq)
    {
        $windaq->delete();

        return redirect('/bdMostrar');
    }

    /* El método crearDatosPrueba recibe un parámetro opcional $cantidad, que por defecto es 10, este método utiliza la biblioteca Faker para generar datos de prueba y crear registros en la base de datos, luego redirige al usuario a la ruta '/bdMostrar' para mostrar los datos creados */

    public function crearDatosPrueba(int $cantidad = 10)
    {
        $faker = Faker::create('es_ES');

        for ($i = 0; $i < $cantidad; $i++) {
            $windaq = new windaq();
            $windaq->nombre = $faker->name();
            $windaq->correo_electronico = $faker->unique()->safeEmail();
            $windaq->contrasena = $faker->password(8, 16);
            $windaq->razon = $faker->sentence(6, true);
            $windaq->campo_nuevo = $faker->word();
            $windaq->save();
        }

        return redirect('/bdMostrar');

    }

}
/*     */

