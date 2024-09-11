<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::view('/dashboard','dashboard') -> middleware('auth') -> name('dashboard');

<<<<<<< HEAD
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
=======
Route::view('/registrar','register') -> name('registrar');

Route::post('/registrar', [LoginController::class, 'register']) -> name('validar-registro');

Route::post('/ingreso', [LoginController::class,'login'])-> name('ingreso');

Route::get('/logout',[LoginController::class, 'logout']) -> name('logout');
>>>>>>> 6077050fe4b68f3939e198dcbd30a0c3f5eb816e
