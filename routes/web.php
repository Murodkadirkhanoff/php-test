<?php

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
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::any('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::any('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::get('/logout',  [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::resource('products', \App\Http\Controllers\ProductController::class)->except('index')->middleware(['auth', 'role:admin']);
Route::resource('products', \App\Http\Controllers\ProductController::class)->only('index')->middleware(['auth', 'role:admin|user']);
