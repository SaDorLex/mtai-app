<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MiembroController;
use App\Http\Middleware\CheckMiembroCargo;
use App\Models\Miembro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::view('/registrar','register') -> name('registrar');

Route::post('/registrar', [LoginController::class, 'register']) -> name('validar-registro');

Route::post('/ingreso', [LoginController::class,'login'])-> name('ingreso');

Route::get('/logout', [LoginController::class, 'logout']) -> name('logout');

//Rutas del Logeo

Route::post('loginCargo', [MiembroController::class, 'loginWithCargo']) -> name('checkLoginCargo');

//Rutas para despues del login

Route::get('dashboard', [MiembroController::class, 'contarCategorias'])->name('dashboard');

Route::view('/reportesDiarios', 'reportesDiarios') -> name('reportesDiarios');

Route::view('/reportesMensuales', 'reportesMensuales') -> name('reportesMensuales');

Route::view('/reportes', 'reportes') -> name('reportes');

Route::view('/agregarMiembro', 'agregarMiembro') -> name('agregarMiembro');

//CRUD de Miembros

Route::get('miembros', [MiembroController::class, 'index']) -> name('miembros');

Route::post('crearMiembro', [MiembroController::class, 'store']) -> name('crearMiembro');

Route::get('buscarMiembros', [MiembroController::class, 'buscarMiembro'])->name('buscarMiembro');

Route::post('eliminarMiembro/{id}', [MiembroController::class, 'destroy']) -> name('eliminarMiembro');

Route::get('miembros/{id}/edit', [MiembroController::class, 'edit']) -> name('modMiembro');

Route::post('actualizarMiembro', [MiembroController::class, 'update'])->name('actMiembro');


//CRUD de Cargos

Route::post('crearCargo', [CargoController::class, 'store']) -> name('crearCargo');

Route::get('cargos', [CargoController::class, 'index']) -> name('cargos');

