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
    return view('app');
});

Route::get('/works', function () {
    return view('app');
});

Route::get('/private', function () {
    return view('app');
});

Route::get('/contact', function () {
    return view('app');
});

Route::get('/get-instagram-images', 'PrivateController@getInstagramPosts');
Route::post('/send-message', 'ContactController@sendMessage');