<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentasController;
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
Route::get('/mostrar', [ProductoController::class, 'Mostrar']);
Route::get('/compra/{id}', [ProductoController::class, 'vender']);
Route::get('/filtrar', [ProductoController::class, 'filtrar']);
Route::delete('/datos/{id}', [ProductoController::class, 'eliminar']);
Route::put('/comprarP/{id}', [ProductoController::class, 'Comprar']);
Route::get('/ventasTotal', [VentasController::class, 'index']);
