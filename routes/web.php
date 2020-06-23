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
    return view('products.index');
});

Route::get('products', function (){
        return view('products.detail');
})->name('products.details');


Route::get('products/custom', function (){
    return view('products.custom');
})->name('products.custom');


Route::get('account', function (){
    return view('account');
})->name('account');

Route::get('contact', function (){
    return view('contact');
})->name('contact');

Route::get('cara-pesan', function (){
    return view('cara-pesan');
})->name('cara-pesan');

Route::get('products/payment', function (){
    return view('products.payment');
})->name('products.payment');

