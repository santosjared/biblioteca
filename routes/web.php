<?php

use App\Http\Controllers\libroController;
use App\Http\Controllers\personaController;
use App\Http\Controllers\prestamoController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});


//ROUTE LIBROS
Route::get('LibroNew',[libroController::class,'create'])->name('new_libro');
Route::post('gaurdarLibro',[libroController::class,'store'])->name('guardar_libro');
Route::post('editLibro',[libroController::class,'edit'])->name('edit_libro');
Route::post('deleteLibro',[libroController::class,'destroy'])->name('remove_libro');
Route::post('upadteLibro',[libroController::class,'update'])->name('update_libro');


//Libros prestados 
Route::post('PrestarLibro',[prestamoController::class,'create'])->name('prestar_libro');
Route::post('Guardarprestamo',[prestamoController::class,'store'])->name('guardar_prestamo');
Route::post('DvevolverLibro',[prestamoController::class,'destroy'])->name('devolver_libro');
Route::post('Editar',[prestamoController::class,'create'])->name('edit_libro');
Route::post('Acualizar',[prestamoController::class,'create'])->name('actualizar_libro');

//ruta prestamos
Route::get('MisLibros',[prestamoController::class,'index'])->name('mis_libros');

//presona
Route::get('NewLector',[personaController::class,'index'])->name('lector_index');
Route::get('Newpersona',[personaController::class,'create'])->name('persona_nueva');
Route::get('editpersona/{id}',[personaController::class,'edit'])->name('persona_editar');
Route::get('mostrarpersona',[personaController::class,'store'])->name('persona_guardar');
Route::get('eliminarpersona',[personaController::class,'create'])->name('persona_eliminar');
Route::post('actualizarpersona/{id}',[personaController::class,'update'])->name('persona_actualizar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
