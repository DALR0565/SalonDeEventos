<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
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
})->name('login');

//Ruta de validacion de Usuario
Route::post('validarusuario',[LoginController::class,'validarUsuario'])->name('validarusuario');


/*Route::get('gerenteUsuarios',function(){
    return view('Empleado.gerenteUsuarios');
})->name('gerenteUsuarios');*/

Route::get('gerenteServicios',function(){
    return view('Empleado.gerenteServicios');
})->name('gerenteServicios');

Route::get('gerentePaquetes',function(){
    return view('Empleado.gerentePaquetes');
})->name('gerentePaquetes');

//Route::get('crearpaquete',[PaqueteController::class, 'create'])->name('paquetes.create');
Route::get('usuarios',[UsuarioController::class, 'index'])->name('Empleado.gerenteUsuarios');
Route::get('paquetes',[PaqueteController::class, 'index'])->name('Empleado.gerentePaquetes');
Route::get('servicios',[ServicioController::class, 'index'])->name('Empleado.gerenteServicios');

///
Route::get('eventos',[EventoController::class, 'index'])->name('Cliente.clienteEventos');



//RUTAS DE GERENTE - USUARIOS
Route::get('actualizar/{cual?}',[UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::post('guardar',[UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('crearusuario',[UsuarioController::class, 'create'])->name('usuarios.create');
Route::put('actualizar/{cual?}',[UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('borrar/{cual?}',[UsuarioController::class, 'destroy'])->name('usuarios.destroy');

//RUTAS DE GERENTE - PAQUETES
Route::get('actualizarpaquete/{cual?}',[PaqueteController::class, 'edit'])->name('paquetes.edit');
Route::post('guardarpaquete',[PaqueteController::class, 'store'])->name('paquetes.store');
Route::get('crearpaquete',[PaqueteController::class, 'create'])->name('paquetes.create');
Route::put('actualizarpaquete/{cual?}',[PaqueteController::class, 'update'])->name('paquetes.update');
Route::delete('borrarpaquete/{cual?}',[PaqueteController::class, 'destroy'])->name('paquetes.destroy');

//RUTAS DE GERENTE - SERVICIOS
Route::get('actualizarservicio/{cual?}',[ServicioController::class, 'edit'])->name('servicios.edit');
Route::post('guardarservicio',[ServicioController::class, 'store'])->name('servicios.store');
Route::get('crearservicio',[ServicioController::class, 'create'])->name('servicios.create');
Route::put('actualizarservicio/{cual?}',[ServicioController::class, 'update'])->name('servicios.update');
Route::delete('borrarservicio/{cual?}',[ServicioController::class, 'destroy'])->name('servicios.destroy');


//RUTAS DE CLIENTE - EVENTOS
Route::get('actualizarevento/{cual?}',[EventoController::class, 'edit'])->name('eventos.edit');
Route::post('guardarevento',[EventoController::class, 'store'])->name('eventos.store');
Route::get('crearevento',[EventoController::class, 'create'])->name('eventos.create');
Route::put('actualizarevento/{cual?}',[EventoController::class, 'update'])->name('eventos.update');
Route::delete('borrarevento/{cual?}',[EventoController::class, 'destroy'])->name('eventos.destroy');






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