<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\PostController;

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

Route::namespace('Site')->group(function(){
    Route::get('/',[HomeController::class]);

    Route::get('/produtos', [CategoryController::class,'index']);
    Route::get('/produtos/{slug}',[CategoryController::class,'show']);


    Route::group(['prefix' => 'posts'], function () {
        Route::get('/',[PostController::class,'index']);
        Route::get('/{slug}',[PostController::class,'show']);
        Route::get('/categoria/{slug}',[PostController::class,'showCategoria']);
    });
});
