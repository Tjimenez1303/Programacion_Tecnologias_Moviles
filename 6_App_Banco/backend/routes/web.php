<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Faker\Guesser\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/usuarios', [UsersController::class, 'index'])->name('usuarios.index');
Route::post("usuarios", [UsersController::class, 'store'])->name('usuarios.store');
Route::get("usuarios/{id}", [UsersController::class, 'show']);
Route::put("usuarios/{id}", [UsersController::class, 'update'])->name('usuarios.update'); //Este name debe ser igual al de la vista index.blade.php
Route::get("usuarios/{id}", [UsersController::class, 'edit'])->name('usuarios.edit'); //Este name debe ser igual al de la vista index.blade.php
Route::delete("usuarios/{id}", [UsersController::class, 'destroy'])->name('usuarios.destroy'); //Este name debe ser igual al de la vista index.blade.php



