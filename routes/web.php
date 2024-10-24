<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/productos', [PageController::class, 'products'])->name('productos');
Route::get('/servicios', [PageController::class, 'services'])->name('servicios');
Route::get('/contacto', [PageController::class, 'contact'])->name('contacto');
route::get('/login', [PageController::class, 'login'])->name('login');

use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login');

use App\Http\Controllers\menuadmin;

Route::get('/home', [menuadmin::class, 'index'])->name('home');
Route::get('/productosadmin', [menuadmin::class, 'productosadmin'])->name('productosadmin');
Route::get('/serviciosadmin', [menuadmin::class, 'servicios'])->name('serviciosadmin');
Route::get('/ventas', [menuadmin::class, 'ventas'])->name('ventas');

use App\Http\Controllers\ProductoController;
Route::post('/productosagregar', [ProductoController::class, 'productosagregar'])->name('productosagregar');
Route::get('/productosadmin', [ProductoController::class, 'mostrarProductos'])->name('productosadmin');
Route::delete('/eliminarProducto/{id}', [ProductoController::class, 'eliminarProducto'])->name('eliminarProducto');
Route::get('/productos', [ProductoController::class, 'mostrarProductoscliente'])->name('productos');
