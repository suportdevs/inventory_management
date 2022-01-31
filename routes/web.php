<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductTypeController;
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
Route::get('/user/index', [HomeController::class, 'index']);
Route::get('/user/create', [HomeController::class, 'create']);
Route::get('/user/edit', [HomeController::class, 'edit']);


// Product Type Routes
Route::resource('product_types', ProductTypeController::class);
Route::get('/product_types', [ProductTypeController::class, 'index'])->name('product_types');
Route::post('/product_types/store', [ProductTypeController::class, 'store'])->name('product_types.store');
Route::post('/product_types/edit/{id}', [ProductTypeController::class, 'edit'])->name('product_types.edit');