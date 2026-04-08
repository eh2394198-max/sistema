<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController; // Importante importar el controlador

Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

// Esta línea crea automáticamente las 7 rutas del CRUD
Route::resource('usuarios', UsuarioController::class);