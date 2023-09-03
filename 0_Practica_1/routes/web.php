<?php

use Illuminate\Support\Facades\Route;

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

//? Ruta que me retorna una vista
Route::get('/', function () { //A través de esta petición de tipo GET me returna la vista 'Welcome'
    return view('welcome'); //Nombre de la vista 
});
