<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/', 'App\Http\Controllers\PageController@index');

/*
|--------------------------------------------------------------------------
|              For Product
|--------------------------------------------------------------------------
*/
Route::get('/products/create',[ProductController::class, 'create'])->middleware('auth');
Route::post('/products/create',[ProductController::class, 'store']);

Route::get('/products',[PageController::class, 'index']);
Route::get('/products/{id}/addToCart',[PageController::class, 'add']);

Route::get('/users/register',[UserController::class, 'create']);
Route::post('/users/register',[UserController::class, 'store']);

Route::get('/users/login',[UserController::class, 'login'])->name('login');
Route::post('/users/login',[UserController::class, 'authenticate']);

Route::post('/logout',[UserController::class, 'logout']);

Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'),function(){
    Route::get('users',[AuthController::class , 'index']);
});





