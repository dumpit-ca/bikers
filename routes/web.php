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
    return view('home');
});

Route::get('/login', 'UserController@login')->name('login');

Route::post('/authenticate', 'UserController@authenticate')->name('auth');

Route::get('/logout', 'UserController@logout')->name('bye');

Route::get('/register', function () {
    return view('register');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/password', function () {
    return view('password');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/test', function () {
    return view('test');
});

Route::group(['middleware'=>['auth']], function(){

    Route::get('/homeaccount', function () {
    return view('homeaccount');
    });
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/profile', function () {
    return view('profile');
});