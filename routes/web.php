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

Route::get('/', function() {
    return view('index');
});

Route::get('/shirts', 'ShirtsController@index');

Route::get('/shirts/{id}', 'ShirtsController@show');

Route::get('/search', 'ShirtsController@index');

Route::get('/filter', 'ShirtsController@filter');

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});
