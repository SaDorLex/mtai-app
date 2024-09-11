<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::view('/dashboard','dashboard') -> middleware('auth') -> name('dashboard');

Route::view('/registrar','register') -> name('registrar');

Route::post('/registrar', [LoginController::class, 'register']) -> name('validar-registro');

Route::post('/ingreso', [LoginController::class,'login'])-> name('ingreso');

Route::get('/logout',[LoginController::class, 'logout']) -> name('logout');