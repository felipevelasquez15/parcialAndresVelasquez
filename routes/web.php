<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tiendaController;
use App\Http\Controllers\marcaController;
use App\Http\Controllers\articuloController;

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



Route::get('/velasquez/presentacion', [tiendaController::class,'index']);
Route::get('/velasquez/articulos', [articuloController::class, 'listadoArticulos']);
Route::get('/velasquez/marcas', [marcaController::class, 'listadoMarcas']);


