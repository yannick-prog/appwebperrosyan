<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('sections.index');
});

//Route::get('/perros', [ContactoController::class, 'show'])->name('perros.show');

Route::get('/perros', function () {
    return view('sections.index');
})->name('perros');

Route::get('/añadirperro', [AñadirPerrosController::class, 'show'])->name('añadirperro.show');

/*
 *
 Route::get('/añadirperro', function () {
    return view('sections.añadirperro');
})->name('añadirperro');
*/
