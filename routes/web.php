<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invitacionController;

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

Route::get('/', [invitacionController::class, 'index'])->name('index');
Route::post('/listadoFotos', [invitacionController::class, 'listadoFotos'])->name('fotos.listadoFotos');
Route::get('/fotos', [invitacionController::class, 'fotos'])->name('fotos');
Route::get('/fotos/{codigo}', [invitacionController::class, 'fotosSeleccion'])->name('fotoscodigo');
Route::post('/fotos/estado', [invitacionController::class, 'fotosEstado'])->name('fotos.actualizarFoto');
Route::post('/fotos/borrar', [invitacionController::class, 'fotosBorrar'])->name('fotos.borrarFoto');
Route::get('/invitaciones', [invitacionController::class, 'invitaciones'])->name('invitaciones');
Route::post('/invitaciones/registrar', [invitacionController::class, 'registrar']);
Route::post('/invitaciones/actualizar', [invitacionController::class, 'actualizar']);
Route::post('/invitaciones/eliminar', [invitacionController::class, 'eliminar']);
Route::get('/asistencia', [invitacionController::class, 'asistencia'])->name('asistencia');
Route::post('/asistencia', [invitacionController::class, 'asistenciaConfirmar'])->name('asistencia.confirmar');
Route::post('/{codigo}/cargaFotos', [invitacionController::class, 'cargaFotos']);
Route::post('/{codigo}/confirmar', [invitacionController::class, 'confirmar']);
Route::get('/{codigo}', [invitacionController::class, 'confirmacion'])->name('confirmar');


// Route::get('/', function () {
//     return view('welcome');
// });
