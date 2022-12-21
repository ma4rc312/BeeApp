<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;

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

Route::get('/',[IndexController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
Route::get('/', function () {
      return view('layouts.layout');
 });
*/



require __DIR__.'/auth.php';

//ruta para categorias
Route::resource('categorias', CategoryController::class );

//ruta para productores
Route::resource('productores', ProducerController::class );

//ruta para productos
Route::resource('productos', ProductController::class );

//ruta para detallePedido
Route::resource('detallePedido', DetailOrderController::class );

//ruta para pedido
Route::resource('pedido', OrderController::class );

//ruta para clientes
Route::resource('clientes', ClientController::class );

//Rutas para carrito

Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
