<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController; // <--- ¡ESTA ES LA LÍNEA QUE FALTA!

Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

Route::resource('usuarios', UsuarioController::class);
Route::resource('productos', ProductoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('ventas', VentaController::class); // <--- Y esta debe estar aquí