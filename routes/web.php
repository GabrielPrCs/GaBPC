<?php

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
    return view('index');
})->name('index');

Route::get('/designs/shop', function () {
    return view('designs.shop');
})->name('shop');

Route::get('/designs/gallery', function () {
    return view('designs.gallery');
})->name('gallery');


// Auth::routes();
