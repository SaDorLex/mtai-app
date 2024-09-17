<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MiembroController;
use App\Models\Miembro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::view('/dashboard','dashboard') -> middleware('auth') -> name('dashboard');

Route::view('/registrar','register') -> name('registrar');

Route::post('/registrar', [LoginController::class, 'register']) -> name('validar-registro');

Route::post('/ingreso', [LoginController::class,'login'])-> name('ingreso');

Route::get('/logout',[LoginController::class, 'logout']) -> name('logout');

//Rutas para despues del login

Route::view('/dashboard','dashboard') -> middleware('auth') -> name('dashboard');

Route::view('/reportesDiarios', 'reportesDiarios') -> middleware('auth') -> name('reportesDiarios');

Route::view('/reportesMensuales', 'reportesMensuales') -> middleware('auth') -> name('reportesMensuales');

Route::view('/reportes', 'reportes') -> middleware('auth') -> name('reportes');

Route::view('/agregarMiembro', 'agregarMiembro') -> middleware('auth') -> name('agregarMiembro');

//CRUD de Miembros

Route::get('miembros', [MiembroController::class, 'index']) -> name('miembros');

Route::post('crearMiembro', [MiembroController::class, 'store']) -> name('crearMiembro');

Route::get('/buscarMiembros', [MiembroController::class, 'buscarMiembro'])->name('buscarMiembro');

Route::post('eliminarMiembro/{id}', [MiembroController::class, 'destroy']) -> name('eliminarMiembro');

Route::get('miembros/{id}/edit', [MiembroController::class, 'edit']) -> name('modMiembro');


//CRUD de Cargos

Route::post('crearCargo', [CargoController::class, 'store']) -> name('crearCargo');

Route::get('cargos', [CargoController::class, 'index']) -> name('cargos');

