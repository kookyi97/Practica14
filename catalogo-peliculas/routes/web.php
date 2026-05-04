<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;


Route::get('/', function () {
    return redirect('/peliculas');
});
Route::get('/peliculas', [PeliculaController::class, 'index']);

Route::get('/peliculas/nombre/{nombre}', [PeliculaController::class, 'buscarPorNombre']);

Route::get('/peliculas/{id}', [PeliculaController::class, 'buscarPorId'])
    ->where('id', '[0-9]+');