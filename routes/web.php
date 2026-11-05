<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\TurnoController;

Route::get('/', [PaginaController::class, 'inicio'])
    ->name('inicio');

Route::get('/servicios', [PaginaController::class, 'servicios'])
    ->name('servicios');

Route::get('/contacto', [PaginaController::class, 'contacto'])
    ->name('contacto');

Route::resource('turnos', TurnoController::class)
    ->only(['index', 'create', 'store', 'destroy']);