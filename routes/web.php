<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/entrar', [LoginController::class, 'entrar']) -> name('entrar');

<<<<<<< HEAD
Route::get('/dashboard',[DashboardController::class, 'dashboard']) -> name('dashboard');

Route::get('/db-test', function () {
    try {
        \DB::connection()->getPdo();
        return 'Conexión exitosa a MySQL';
    } catch (\Exception $e) {
        return 'No se pudo conectar a la base de datos: ' . $e->getMessage();
    }
});
=======
Route::view('/dashboard',[DashboardController::class, 'dashboard']) -> name('dashboard');
>>>>>>> origin/master
