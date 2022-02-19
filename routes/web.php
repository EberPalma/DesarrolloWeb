<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscuelaController;

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

// * Ruta para la lista de usuarios
Route::get('/', [EscuelaController::class, 'alumnosIndex'])->name('index');

// * Ruta para el detalle del alumno
Route::GET('/detalle/{id}', [EscuelaController::class, 'alumnosShow'])->name('detalle');

// * Ruta para los nuevos registros
Route::get('/nuevo', [EscuelaController::class, 'alumnosCreate'])->name('nuevo');
Route::post('/guardar', [EscuelaController::class, 'alumnosStore'])->name('guardar');

// * Ruta para actualizar la informacion
Route::put('/salvar', [EscuelaController::class, 'alumnosUpdate'])->name('salvar');
Route::GET('/editar/{$id}', [EscuelaController::class, 'alumnosEdit'])->name('editar');

// * Ruta para eliminar registros
Route::delete('/eliminar/{id}', [EscuelaController::class, 'alumnosDelete'])->name('borrar1');
Route::get('/eliminar/{id}', [EscuelaController::class, 'alumnosDelete'])->name('borrar2');

//* Rutas para los ejemplos de javascript
Route::GET('/ejemplo01', [function(){return view('ejemplo01');}]);
Route::GET('/ejemplo02', [function(){return view('ejemplo02');}]);