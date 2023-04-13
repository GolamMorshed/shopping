<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product', function () {
    return view('admin_view/layouts/add_product');
});

Route::get('/admin_product', function () {
    return view('admin_view/layouts/product');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/add_product', [App\Http\Controllers\ProductController::class, 'store'])->name('addProd');
Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
