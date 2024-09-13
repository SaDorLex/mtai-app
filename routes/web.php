<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MiembroController;
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

Route::view('/cargos','cargos') -> middleware('auth') -> name('cargos');

Route::view('/miembros', 'miembros') -> middleware('auth') -> name('miembros');

Route::view('/reportesDiarios', 'reportesDiarios') -> middleware('auth') -> name('reportesDiarios');

Route::view('/reportesMensuales', 'reportesMensuales') -> middleware('auth') -> name('reportesMensuales');

Route::view('/reportes', 'reportes') -> middleware('auth') -> name('reportes');

Route::view('/agregarMiembro', 'agregarMiembro') -> middleware('auth') -> name('agregarMiembro');

//CRUD de Miembros

Route::post('crearMiembro', [MiembroController::class, 'store']) -> name('crearMiembro');