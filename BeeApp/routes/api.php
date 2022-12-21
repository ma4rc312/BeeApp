<?php

use App\Http\Controllers\Auth\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);


Route::group(['middleware' => ["auth:sanctum"]], function(){
    Route::get('user_profile', [UserController::class,'userProfile']);
    Route::get('logout', [UserController::class,'logout']);

    Route::get('/users',[UserController::class,'index']);


//ruta de categoria
Route::apiResource('category', CategoryController::class);
Route::delete('/category/{Category}',[CategoryController::class,'destroy']);


//ruta de productos
Route::apiResource('/product', ProductController::class);
Route::delete('product/{Product}',[ProductController::class,'destroy']);

///ruta de order
Route::apiResource('/order',OrderController::class);


//ruta order detail

Route::apiResource('/order_detail',DetailOrderController::class);


});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
