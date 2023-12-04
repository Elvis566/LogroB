<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
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

Route::get('/producto', [ProductoController::class, 'index']);
Route::post('/guardarProducto', [ProductoController::class, 'save']);
Route::post('/guardarCategoria', [CategoriaController::class, 'save']);
Route::get('/', [CategoriaController::class, 'index']);
