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

Route::get('/', [invitacionController::class, 'index']);
Route::get('/invitaciones', [invitacionController::class, 'invitaciones'])->name('invitaciones');
Route::post('/invitaciones/registrar', [invitacionController::class, 'registrar']);
Route::post('/invitaciones/actualizar', [invitacionController::class, 'actualizar']);
Route::post('/invitaciones/eliminar', [invitacionController::class, 'eliminar']);
Route::get('/{codigo}', [invitacionController::class, 'confirmacion'])->name('confirmar');
Route::post('/{codigo}/confirmar', [invitacionController::class, 'confirmar']);


// Route::get('/', function () {
//     return view('welcome');
// });
