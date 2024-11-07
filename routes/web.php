<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonasController;

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
    return view('welcome');
});
Route::get('/personas', [PersonasController::class, 'index'])->name('personas.index');
Route::post('/personas', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/personas/create', [PersonasController::class, 'create'])->name('personas.create');
route::get('/personas/{id}', [PersonasController::class, 'show'])->name('personas.show');
route::delete('/personas/{persona}', [PersonasController::class, 'destroy'])->name('personas.destroy');
Route::get('/personas/{id}/edit', [PersonasController::class, 'edit'])->name('personas.edit');

// Ruta para actualizar la persona
Route::put('/personas/{id}', [PersonasController::class, 'update'])->name('personas.update');