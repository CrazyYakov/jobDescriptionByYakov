<?php

Route::get('/createDocument', 'DocumentController@create');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
