<?php

use App\Http\Controllers\AuthWebController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('landingWeb');

Route::get('/shop', [ProductController::class, 'indexWeb'])->name('shop');
Route::get('/shop/{product}', [ProductController::class, 'details'])->name('shop.detail');

Route::get('/login', [AuthWebController::class, 'login'])->name('login');
Route::post('/login', [AuthWebController::class, 'loginStore'])->name('login.store');
Route::post('/logout', [AuthWebController::class, 'logout'])->name('logout');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');


Route::get('/register', [AuthWebController::class, 'register'])->name('register');
Route::post('/register', [AuthWebController::class, 'registerStore'])->name('register.store');

