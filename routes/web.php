<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/usuarios', function (){
    return 'Usuarios';
});

//usuarios/nuevos!= usuarios/
Route::get('/usuarios/{id}',function($id) {
    return "Mostrando detalles del usuario: {$id}";
})->where('id', '[0-9]+'); // Condicion para evitar la confucion de la ruta usuarios/

Route::get('/usuarios/nuevo',function() {
    return 'Crear nuevo usuario';
});

//el ? se utiliza para decir que el parametro no es obligatorio
Route::get('/saludo/{name}/{nickname?}',function($name,$nickname = null) {
    $name = ucfirst($name); //Colocamos la primera letra del nombre en mayuscula

    if($nickname){
        return "Biemvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Biemvenido {$name}, no cuentas conun apodo";
    }
});