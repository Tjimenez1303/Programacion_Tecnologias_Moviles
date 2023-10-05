<?php

// Importamos los controladores
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\UsersController;


use Illuminate\Support\Facades\Route;
use Faker\Guesser\Name;


// Importamos el archivo de Laravel para identificar cuando un usuario está autenticado y cuando no
use Illuminate\Support\Facades\Auth;

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

// Ruta inicial de bienvenida -> Se crea la ruta pero la vista 'welcome' ya está hecha
Route::get('/',function(){
    return view('welcome');
});

// Rutas del rol de gerente
// Route::middleware(['auth', 'role:gerente'])->group(function () {
    Route::get('/gerente', [GerenteController::class, 'index'])->name('gerente');
    Route::get('/asesor', [AsesorController::class, 'index'])->name('asesor');
    Route::get('/usuarios', [UsersController::class, 'index'])->name('usuarios.index');
    Route::post("usuarios", [UsersController::class, 'store'])->name('usuarios.store');
    Route::get("usuarios/{id}", [UsersController::class, 'edit'])->name('usuarios.edit');
    Route::delete("usuarios/{id}", [UsersController::class, 'destroy'])->name('usuarios.destroy');
    Route::put("usuarios/{id}", [UsersController::class, 'update'])->name('usuarios.update');
// });


// Rutas del rol de usuario
Route::middleware(['auth', 'role:usuario'])->group(function () {
    Route::get('/usuario', [UsersController::class, 'index'])->name('usuario');
});


// Rutas del rol de asesor
Route::middleware(['auth', 'role:asesor'])->group(function () {
    Route::get('/asesor', [AsesorController::class, 'index'])->name('asesor');
});


// Estas dos líneas se ponen al yo ejecutar los comandos de autenticación
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

