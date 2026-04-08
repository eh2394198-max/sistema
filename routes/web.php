<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

// CRUD de usuarios
Route::resource('usuarios', UsuarioController::class);

// CRUD de productos
Route::resource('productos', ProductoController::class);

// CRUD de clientes
Route::resource('clientes', ClienteController::class);