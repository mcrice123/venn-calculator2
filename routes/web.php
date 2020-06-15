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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/comparison', function() {
    return view('comparison');
});

Route::get('/suppliers', function() {
    return view('suppliers');
});

Route::get('/items', function() {
    return view('items');
});

Route::get('/about', function() {
    return view('about');
});