<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Esta clase tiene sola una funcion, por ello se usa el metodo __invoke
 */

class HomeController extends Controller
{
    public function __invoke()
    {
        $hola = 'Hola mundo';
        return view('home');

    }

}
