<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InteraccionesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/golpear',[InteraccionesController::class, 'golpear']);

Route::get('/saludar/{nombre}', [InteraccionesController::class, 'saludar']);


