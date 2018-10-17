<?php

Route::get('/', 'Controller@showIndex')->name('app');
Route::get('/about', 'Controller@showAbout');
Route::get('/history', 'Controller@showHistory');
Route::get('/private', 'Controller@showPrivate');
Route::get('/contact', 'Controller@showContact');

Route::get('/get-instagram-images', 'PrivateController@getInstagramPosts');
Route::post('/send-message', 'ContactController@sendMessage');