<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('refresh', [LoginController::class, 'refresh'])->name('refresh');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
});


Route::group(['middleware' => ['auth:api']], function () {
    Route::apiResource('products', ProductController::class);
    Route::post('products/{product}', [ProductController::class, 'update'])->name('products.update');


    Route::get('carts', [CartController::class, 'index'])->name('carts.index');
    Route::post('carts/{product}', [CartController::class, 'storeProductCart'])->name('carts.store');
    Route::post('carts/{product}/increment', [CartController::class, 'increment'])->name('carts.increment');
    Route::post('carts/{product}/decrement', [CartController::class, 'decrement'])->name('carts.decrement');

    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('orders', [OrderController::class, 'store'])->name('orders.store');
});