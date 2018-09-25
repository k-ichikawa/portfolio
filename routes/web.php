<?php

Route::get('/', 'Controller@showAbout');
Route::get('/works', 'Controller@showWorks');
Route::get('/private', 'Controller@showPrivate');
Route::get('/contact', 'Controller@showContact');

Route::get('/get-instagram-images', 'PrivateController@getInstagramPosts');
Route::post('/send-message', 'ContactController@sendMessage');