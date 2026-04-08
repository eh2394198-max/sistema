<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

// CRUD de usuarios
Route::resource('usuarios', UsuarioController::class);

// CRUD de productos
Route::resource('productos', ProductoController::class);