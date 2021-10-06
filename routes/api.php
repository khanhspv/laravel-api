<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CustomerController;
use App\Http\Controllers\Api\v1\CategoryPostController;
use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v1\PostDetailController;
use App\Http\Controllers\Api\v1\CategoryDetailController;


use App\Http\Controllers\HomeController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[ HomeController::class ,'index']);


//->only([]) chỉ chạy các phương thức
//->except([]) trừ các phương thức này ra

Route::prefix('v1')->group(function(){
    Route::resource('customer',CustomerController::class)->only(['show','update','delete','store']);
    Route::resource('customer', CustomerController::class)->only(['index']);

    Route::resource('category', CategoryPostController::class);
    Route::resource('post', PostController::class);

    Route::resource('bai-viet', PostDetailController::class);

    Route::resource('danh-muc', CategoryDetailController::class);
});

Route::prefix('v2')->group(function(){
    //Route::resource('customer', CustomerController::class)->only(['show','update','delete','store']);
    Route::resource('customer', App\Http\Controllers\Api\v2\CustomerController::class)->only(['show']);

});
