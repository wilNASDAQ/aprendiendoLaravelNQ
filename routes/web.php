<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InteraccionesController;
use App\Http\Controllers\bdExample;
use Illuminate\Support\Facades\Route;

/* rutas del curso aprendiendo Laravel */

Route::get('/', HomeController::class);

Route::get('/golpear',[InteraccionesController::class, 'golpear']);

Route::get('/saludar/{nombre}', [InteraccionesController::class, 'saludar']);

/* rutas del CRUD */

Route::get('/bdFormulario', [bdExample::class, 'bdFormulario']);

Route::post('/bdAgregar', [bdExample::class, 'guardarDatos']);

Route::get('/bdMostrar', [bdExample::class, 'mostrarBd']);

Route::get('/bdEditar/{windaq}', [bdExample::class, 'editarDatos']);

Route::put('/bdActualizar/{windaq}', [bdExample::class, 'actualizarDatos']);

Route::delete('/bdEliminar/{windaq}', [bdExample::class, 'eliminarDatos']);

Route::get('/ttt/{cantidad?}', [bdExample::class, 'crearDatosPrueba']);

