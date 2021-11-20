<?php

use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\GalleryInspirasiController;
use App\Http\Controllers\Web\GoogleController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\PembuatanTamanController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Web\Admin\PackageController as AdminPackageController;
use App\Http\Controllers\Web\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Web\Admin\DashboardController;
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

Route::get('shop', [ProductController::class, 'index'])->name('shop');
Route::get('shop/{product}', [ProductController::class, 'show'])->name('shop.detail');
Route::post('shop/{product}/cart', [ProductController::class, 'addProductToCart'])->name('shop.detail.cart');
Route::post('shop/{package}/cart/package', [ProductController::class, 'addPackageToCart'])->name('shop.detail.cart.package');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginStore'])->name('login.store');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');


Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerStore'])->name('register.store');


Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::delete('carts/{cart}', [CartController::class, 'removeProduct'])->name('cart.remove');
Route::post('carts/{cart}/increment', [CartController::class, 'increment'])->name('cart.increment');
Route::post('carts/{cart}/decrement', [CartController::class, 'decrement'])->name('cart.decrement');

Route::get('orders/store', [OrderController::class, 'create'])->name('orders.store.get');
Route::get('orders', [OrderController::class, 'index'])->name('orders');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::delete('orders/{order}', [OrderController::class, 'destroy'])->name('orders.delete');
Route::post('orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('orders/bukti/{order}', [OrderController::class, 'buktiEdit'])->name('orders.bukti');
Route::post('orders/bukti/{order}', [OrderController::class, 'buktiUpdate'])->name('orders.bukti.store');


Route::get('taman', [PembuatanTamanController::class, 'index'])->name('taman');
Route::get('taman/perawatan', [PembuatanTamanController::class, 'perawatanTaman']) ->name('perawatan');
Route::get('taman/tamanIndoor', [PembuatanTamanController::class, 'tamanIndoor']) ->name('tamanIndoor');
Route::get('taman/tamanOutdoor', [PembuatanTamanController::class, 'tamanOutdoor']) ->name('tamanOutdoor');

Route::get('inspirasi', [GalleryInspirasiController::class, 'index'])->name('inspirasi');

Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin');

    Route::get('orders', [AdminOrderController::class, 'index'])->name('admin.orders');
    Route::get('orders/{order}', [AdminOrderController::class, 'show'])->name('admin.orders.detail');
    Route::put('orders/{order}', [AdminOrderController::class, 'updateStatus'])->name('admin.orders.update');
    Route::get('history', [AdminOrderController::class, 'history'])->name('admin.history');

    Route::get('products', [AdminProductController::class, 'index'])->name('admin.products');
    Route::get('products/store', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('products', [AdminProductController::class, 'store'])->name('admin.products.store');
    Route::get('products/{product}', [AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('products/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');
    Route::delete('products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.delete');
    
    Route::get('packages', [AdminPackageController::class, 'index'])->name('admin.packages');
    Route::get('packages/store', [AdminPackageController::class, 'create'])->name('admin.packages.create');
    Route::post('packages', [AdminPackageController::class, 'store'])->name('admin.packages.store');
    Route::get('packages/{package}', [AdminPackageController::class, 'edit'])->name('admin.packages.edit');
    Route::put('packages/{package}', [AdminPackageController::class, 'update'])->name('admin.packages.update');
    Route::delete('packages/{package}', [AdminPackageController::class, 'destroy'])->name('admin.packages.delete');
});