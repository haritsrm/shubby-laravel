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
    return view('welcome');
});

Route::get('/products', 'Product\ProductController@index')->name('products');
Route::get('/product/{id}', 'Product\ProductController@detail')->name('product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home', 'AdminController@index')->name('admin.home');
});

Route::get('/cart', 'Cart\CartController@index')->name('cart');
Route::get('/checkout', 'Order\OrderController@index')->name('order');
Route::get('/pembayaran', 'Order\OrderController@pembayaran')->name('pembayaran');
Route::get('/transaction', 'Transaction\TransactionController@index')->name('transaction');
Route::get('/belanjaanku', 'Belanjaan\BelanjaanController@index')->name('belanjaanku');