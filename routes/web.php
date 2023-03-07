<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('Login.login');
});

//Ruta de validacion de Usuario
Route::post('validarusuario',[LoginController::class,'validarUsuario'])->name('validarusuario');


//Rutas de los usuarios
Route::get('gerente',function(){
    return view('Empleado.gerente');
})->name('gerente');

Route::get('empleado',function(){
    return view('Empleado.empleado');
})->name('empleado');

Route::get('anonimo',function(){
    return view('Cliente.anonimo');
})->name('anonimo');

Route::get('cliente',function(){
    return view('Cliente.cliente');
})->name('cliente');
