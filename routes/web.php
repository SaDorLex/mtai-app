<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/entrar', [LoginController::class, 'entrar']) -> name('entrar');

Route::view('/dashboard',[DashboardController::class, 'dashboard']) -> name('dashboard');
