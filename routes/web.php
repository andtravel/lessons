<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

//Route::controller(OrderController::class)->group(function () {
//    Route::get('/orders/{id}', 'show');
//    Route::post('/orders', 'store');
//});

//Route::prefix('categories')->group(function () {
//    Route::get('/create',[CategoryController::class,'create']);
//    Route::get('/index',[CategoryController::class,'index']);
//    Route::get('/update',[CategoryController::class,'update']);
//    Route::get('/edit',[CategoryController::class,'edit']);
//    Route::post('/delete',[CategoryController::class,'destroy']);
//});

//Route::get('/categories/create', function (){
//    return view('categories.create');
//});
Route::resource('/categories',CategoryController::class);
Route::resource('/posts',PostController::class);
