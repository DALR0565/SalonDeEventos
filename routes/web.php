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


Route::get('gerenteUsuarios',function(){
    return view('Empleado.gerenteUsuarios');
})->name('gerenteUsuarios');

Route::get('gerenteServicios',function(){
    return view('Empleado.gerenteServicios');
})->name('gerenteServicios');

Route::get('gerentePaquetes',function(){
    return view('Empleado.gerentePaquetes');
})->name('gerentePaquetes');

//Rutas de los usuarios
/*Route::get('gerente',function(){
    return view('plantillas.gerente');
})->name('gerente');*/

Route::get('empleado',function(){
    return view('plantillas.empleado');
})->name('empleado');

Route::get('anonimo',function(){
    return view('plantillas.anonimo');
})->name('anonimo');

Route::get('cliente',function(){
    return view('plantillas.cliente');
})->name('cliente');