<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiceController;

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
})->name('home');

Route::get('/contact/', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/', [MainController::class, 'contact'])->name('contact.submit');

Route::get('/services/', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'details'])->name('services.details');

Route::get('/products/', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/{slug}/', [ProductsController::class, 'details'])->name('products.details');


