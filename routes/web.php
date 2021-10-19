<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthWebController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GalleryInspirasiController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembuatanTamanController;
use App\Http\Controllers\ProductController;
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

Route::get('', [HomeController::class, 'index'])->name('landingWeb');

Route::get('shop', [ProductController::class, 'indexWeb'])->name('shop');
Route::get('shop/{product}', [ProductController::class, 'details'])->name('shop.detail');
Route::delete('shop/{product}', [ProductController::class, 'destroyWeb'])->name('shop.delete');
Route::post('shop/{product}/cart', [ProductController::class, 'addProductToCart'])->name('shop.detail.cart');

Route::get('login', [AuthWebController::class, 'login'])->name('login');
Route::post('login', [AuthWebController::class, 'loginStore'])->name('login.store');
Route::post('logout', [AuthWebController::class, 'logout'])->name('logout');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');


Route::get('register', [AuthWebController::class, 'register'])->name('register');
Route::post('register', [AuthWebController::class, 'registerStore'])->name('register.store');


Route::get('cart', [CartController::class, 'indexWeb'])->name('cart');
Route::delete('carts/{product}', [CartController::class, 'removeProduct'])->name('cart.remove');
Route::post('carts/{product}/increment', [CartController::class, 'increment'])->name('cart.increment');
Route::post('carts/{product}/decrement', [CartController::class, 'decrement'])->name('cart.decrement');

Route::get('orders/store', [OrderController::class, 'indexStoreWeb'])->name('orders.store.get');
Route::get('orders/store/bukti', [OrderController::class, 'indexStoreWeb'])->name('orders.store.get');
Route::get('orders', [OrderController::class, 'indexWeb'])->name('orders');
Route::get('orders/{order}', [OrderController::class, 'showWeb'])->name('orders.show');
Route::delete('orders/{order}', [OrderController::class, 'delete'])->name('orders.delete');
Route::post('orders', [OrderController::class, 'storeWeb'])->name('orders.store');
Route::get('orders/bukti/{order}', [OrderController::class, 'buktiEdit'])->name('orders.bukti');
Route::post('orders/bukti/{order}', [OrderController::class, 'buktiUpdate'])->name('orders.bukti.store');


Route::get('taman', [PembuatanTamanController::class, 'index'])->name('taman');

Route::get('inspirasi', [GalleryInspirasiController::class, 'index'])->name('inspirasi');

Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('orders/{order}', [AdminController::class, 'showOrder'])->name('admin.orders.detail');
    Route::put('orders/{order}', [AdminController::class, 'updateStatusOrder'])->name('admin.orders.update');
    Route::get('products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('products/store', [AdminController::class, 'productsCreate'])->name('admin.products.create');
    Route::post('products', [AdminController::class, 'storeProducts'])->name('admin.products.store');
    Route::get('products/{product}', [AdminController::class, 'productsEdit'])->name('admin.products.edit');
    Route::put('products/{product}', [AdminController::class, 'productsUpdate'])->name('admin.products.update');
    Route::get('history', [AdminController::class, 'history'])->name('admin.history');
});