<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


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


Route::get('/admin', function () {
      return view('layouts.layout');
 });

 Route::get('/concientizacion', function () {
    return view('concientizacion');
});
Route::get('/perfil', function () {
    return view('perfil');
});


Route::get('/lineas', function () {
    return view('lineas ');
});


Route::get('/solicitud', function () {
    return view('solicitud');
});


require __DIR__.'/auth.php';

//ruta para categorias
Route::resource('categorias', CategoryController::class )->except('show')->names('categorias');

//ruta para productores
Route::resource('productores', ProducerController::class)->except('show')->names('productores');

//ruta para productos
Route::resource('productos', ProductController::class )->except('show')->names('productos');

//ruta para detallePedido
Route::resource('detallePedido', DetailOrderController::class );

//ruta para pedido
Route::resource('pedido', OrderController::class );

//ruta para clientes
Route::resource('clientes', ClientController::class );


//ruta para roles
Route::resource('roles', RoleController::class)->names('roles');


Route::resource('users', UserController::class)->only(['index','edit','update'])->names('users');


//Route::get('/admin', [IndexController::class, 'index'])->name('index');


//Rutas para carrito

Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();

});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExists = User::where('external_id', $user->id)->where('external_auth','google')->first();

    if ($userExists) {
        Auth::login($userExists);
    } else{
        $userNew = User::create([
            'name' => $user -> name,
            'email' => $user -> email,
            'external_id' => $user -> id,
            'external_auth' => 'google',
        ])->assignRole('Usuario');

        Auth::login($userNew);
    }
    
    return redirect('/');
    // $user->token
});