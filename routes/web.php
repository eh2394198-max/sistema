<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DashboardController;

// Página principal
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// CRUD
Route::resource('usuarios', UsuarioController::class);
Route::resource('productos', ProductoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('ventas', VentaController::class);