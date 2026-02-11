<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class windaq extends Model
{
    protected $table = 'usuarios';

    /* aca podemos modificar el atributo 'publicado', por mas que lo hayamos creado como un timestamp, al agregarlo a la 
    base de datos esta misma la trata como un string, por lo que al agregarlo a la funcion casts, le decimos a laravel 
    que lo trate como un datetime, y asi poder usar las funciones de Carbon para mostrarlo de diferentes 
    formas en la vista */

    protected function casts():array
    {
        return [
            'publicado' => 'datetime',
            'created_at' => 'datetime',
        ];
    }

    /* En este modelo se definen los atributos de la tabla 'usuarios' y se crean mutadores para cada uno de ellos, 
    con el fin de convertir los valores a mayúsculas antes de guardarlos en la base de datos, tambien datos
     escritos como correo_electronico se deben escribir correoElectronico para que el mutador funcione correctamente
    */

    protected function nombre(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return ucfirst(strtolower($value));
            },
        );
    }

    protected function correoElectronico(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtoupper($value);
            },
        );
    }

    protected function razon(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return ucfirst(strtolower($value));
            },
        );
    }

    protected function campoNuevo(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return ucfirst(strtolower($value));
            },
        );
    }
}
