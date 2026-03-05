<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\CategoriasController;

Route::get('/', function () {
	return redirect()->route('peliculas.index');
});

Route::resource('/peliculas', PeliculasController::class);
Route::resource('/categorias', CategoriasController::class);