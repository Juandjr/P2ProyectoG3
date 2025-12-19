<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

// Rutas CRUD para todas las entidades principales
Route::resource('buses', App\Http\Controllers\BusController::class);
Route::resource('paradas', App\Http\Controllers\ParadaController::class);
Route::resource('conductores', App\Http\Controllers\ConductorController::class);
Route::resource('rutas', App\Http\Controllers\RutaController::class);
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('reportes', App\Http\Controllers\ReporteController::class);
Route::resource('notificaciones', App\Http\Controllers\NotificacionController::class);
Route::resource('viajes', App\Http\Controllers\ViajeController::class);
