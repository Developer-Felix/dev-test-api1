<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

// Route::resource('v1/products',ProductController::class);

Route::get('v1/products',[ProductController::class,'index']);

Route::get('v1/products/search/{name}',[ProductController::class,'search']);

Route::post('v1/products',[ProductController::class,'store']);

Route::get('v1/products/{product}',[ProductController::class,'show']);

Route::put('v1/products/{product}',[ProductController::class,'update']);

Route::delete('v1/products/{product}',[ProductController::class,'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
