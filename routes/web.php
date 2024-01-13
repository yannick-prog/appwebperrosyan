<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerrosController;
use App\Http\Controllers\AñadirPerrosController;


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
//Ruta 1 index raiz
Route::get('/', function () {
    return view('sections.index');
});

//Ruta 2 ver perros
Route::get('/perros', function () {
    return view('sections.vistaperros');
})->name('perros.show');
Route::get('/getperros', [PerrosController::class, 'get']);

//Ruta 3 añadir perro
Route::get('/añadirperro', [AñadirPerrosController::class, 'create'])->name('añadirperro.create');
Route::post('/guardarperro', [AñadirPerrosController::class, 'store'])->name('añadirperro.store');

/*
 *
 Route::get('/añadirperro', function () {
    return view('sections.añadirperro');
})->name('añadirperro');
*/
