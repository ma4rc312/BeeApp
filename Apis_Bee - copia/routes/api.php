<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Detail_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login',[AuthController::class,'login']);

Route::group(['middleware' => ["auth:sanctum"]], function(){
    Route::post('logout', [AuthController::class,'logout']);
    Route::get('user_profile/{$user->id}', [AuthController::class,'userProfile']);
    Route::get('/users',[AuthController::class,'index']); 

});


////////////////////////////////

//ruta de categoria
Route::apiResource('/category',CategoryController::class);
Route::delete('/category/{Category}',[CategoryController::class,'destroy']);


//ruta de productos
Route::apiResource('/product', ProductController::class);
Route::put('product/{Product}',[ProductController::class,'update']);

Route::delete('product/{Product}',[ProductController::class,'destroy']);


///ruta de order
Route::apiResource('/order',OrderController::class);


//ruta order detail

Route::apiResource('/detail_order',DetailOrderController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
