<?php

use Illuminate\Support\Facades\Route;

//Importamos el controlador GuestsController
use App\Http\Controllers\GuestsController;


use Illuminate\Support\Facades\Auth;

// Importamos el middleware Role
use App\Http\Middleware\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('ruta', function () {
    return 'Si puede ingresar a esta ruta';
})->middleware('proteccion');

// 
Route::get('ruta_verificacion', function () {
    return 'No puede ingresar, la ruta esta protegida';
});

Route::get('/home', [GuestsController::class, 'index'])->name('home');