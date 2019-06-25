<?php

Route::group(['middleware'=>['auth']], function () {
   
    Route::get('/createDocument', 'JobDescriptionController@create');
    Route::get('/createDocument/createJD', 'JobDescriptionController@createJD'); 
    Route::get('/showDocuments', 'JobDescriptionController@index');
});


Route::group(['prefix' => 'superAdmin', 'namespace'=>'superAdmin', 'middleware=>[superAdmin]'], function () {
    
    Route::get('/','siteController@site')->name('superAdmin.site');

    Route::get('/institutions', 'InstitutionsController@index')->name('superAdmin.institutions.index');
    Route::get('/institutions/create', 'InstitutionsController@create')->name('superAdmin.institutions.create');
    Route::get('/institutions/delete', 'InstitutionsController@delete')->name('superAdmin.institutions.delete');
    Route::get('/institutions/store', 'InstitutionsController@store')->name('superAdmin.institutions.store');
    
    Route::get('/users', 'UserController@index')->name('superAdmin.users.index');
    Route::get('/users/create', 'UserController@create')->name('superAdmin.users.create');
    Route::get('/users/delete', 'UserController@delete')->name('superAdmin.users.delete');
    Route::get('/users/store', 'UserController@store')->name('superAdmin.users.store');
    
});

Route::group(['middleware' => ['auth']], function () {
    
});

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', '');