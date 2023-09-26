<?php

//Para importar mas breve solo coloco el controlador -> UserController
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('users', [UsersController::class,'index']);
Route::post('users',[UsersController::class,'store']);
Route::put('users/{id}',[UsersController::class,'update']);
Route::get('user/{id}',[UsersController::class,'show']);
Route::delete('user/{id}',[UsersController::class,'destroy']);



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
