<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios',[UserController::class, 'index']); //Mandamos a llamar al controlador y su metodo

Route::get('/usuarios/{id}',[UserController::class, 'show'])->where('id', '[0-9]+'); // Condicion para evitar la confucion de la ruta usuarios/

Route::get('/usuarios/nuevo', [UserController::class, 'create']);

//el ? se utiliza para decir que el parametro no es obligatorio
Route::get('/saludo/{name}/{nickname?}',WelcomeUserController::class); //Controlador de una sola funcion