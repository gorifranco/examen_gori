<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\examenController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Rutas examen
Route::get('/grafico', [examenController::class, 'crearGrafico'])->name('grafico');



require __DIR__.'/auth.php';