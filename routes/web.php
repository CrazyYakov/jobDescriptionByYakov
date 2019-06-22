<?php

Route::get('/createDocument', 'DocumentController@create');

Route::group(['prefix' => 'admin', 'namespace'=>'Admin', 'middleware=>[superAdmin]'], function () {
    Route::get('/','siteController@site')->name('admin.index');
    Route::resource('/institutions', 'InstitutionsController',['as'=>'superAdmin']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/showDocuments', 'DocumentController@show');
});


Route::get('/createDocument/createJD', 'DocumentController@createJD');


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', '');