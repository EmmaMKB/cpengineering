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
})->name('home');

Route::get('/services/', function () {
    return view('services.index');
})->name('services.index');

Route::get('/services/certification-training/', function () {
    return view('services.certification-training');
})->name('services.certification-training');

Route::get('/services/civil-engineering/', function () {
    return view('services.civil-engineering');
})->name('services.civil-engineering');

Route::get('/services/cleaning/', function () {
    return view('services.cleaning');
})->name('services.cleaning');

Route::get('/services/engineering/', function () {
    return view('services.engineering');
})->name('services.engineering');

Route::get('/services/environmental-work/', function () {
    return view('services.environmental-work');
})->name('services.environmental-work');

Route::get('/services/industrial-maintenance/', function () {
    return view('services.industrial-maintenance');
})->name('services.industrial-maintenance');

Route::get('/services/logistics/', function () {
    return view('services.logistics');
})->name('services.logistics');

Route::get('/services/metal-welding/', function () {
    return view('services.metal-welding');
})->name('services.metal-welding');

Route::get('/services/minerals-reduction/', function () {
    return view('services.minerals-reduction');
})->name('services.minerals-reduction');

Route::get('/services/mining-studies/', function () {
    return view('services.mining-studies');
})->name('services.mining-studies');

Route::get('/services/repair/', function () {
    return view('services.repair');
})->name('services.repair');

Route::get('/services/technical-advice/', function () {
    return view('services.technical-advice');
})->name('services.technical-advice');


