<?php

Route::group(['middleware'=>['auth']], function () {
   
    Route::get('/createDocument', 'JobDescriptionController@create');   
});
Route::post('/createDocument/createJD', 'JobDescriptionController@createJD')->name('createDocument.createJD');
Route::get('/showDocuments', 'JobDescriptionController@index')->name('showDocuments');


Route::group(['prefix' => 'superAdmin', 'namespace'=>'superAdmin', 'middleware'=>'superAdmin'], function () {
    
    Route::get('/','siteController@site')->name('superAdmin.site');

    Route::get('/institutions', 'InstitutionsController@index')->name('superAdmin.institutions.index');
    Route::get('/institutions/create', 'InstitutionsController@create')->name('superAdmin.institutions.create');
    Route::get('/institutions/delete', 'InstitutionsController@delete')->name('superAdmin.institutions.delete');
    Route::get('/institutions/store', 'InstitutionsController@store')->name('superAdmin.institutions.store');
    
    Route::get('/users', 'UserController@index')->name('superAdmin.users.index');
    Route::get('/users/create', 'UserController@create')->name('superAdmin.users.create');
    Route::get('/users/delete', 'UserController@delete')->name('superAdmin.users.delete');
    Route::get('/users/store/', 'UserController@store')->name('superAdmin.users.store');
    
});

Route::group(['prefix' => 'moderator', 'namespace'=>'moderator','middleware' => 'auth'], function () {

    Route::get('/','siteController@site')->name('moderator.site');

    Route::get('/typeReqs', 'typeReqController@index')->name('moderator.typeReqs.index');
    Route::get('/typeReqs/create', 'typeReqController@create')->name('moderator.typeReqs.create');
    Route::get('/typeReqs/store', 'typeReqController@store')->name('moderator.typeReqs.store');

    Route::get('/requirements', 'RequirementController@index')->name('moderator.requirements.index');
    Route::get('/requirements/create', 'RequirementController@create')->name('moderator.requirements.create');
    Route::get('/requirements/store', 'RequirementController@store')->name('moderator.requirements.store');


    Route::get('/jobs', 'JobsController@index')->name('moderator.jobs.index');
    Route::get('/jobs/create', 'JobsController@create')->name('moderator.jobs.create');
    Route::get('/jobs/store', 'JobsController@store')->name('moderator.jobs.store');

    Route::get('/StructUnit', 'StructUnitController@index')->name('moderator.StructUnit.index');
    Route::get('/StructUnit/create', 'StructUnitController@create')->name('moderator.StructUnit.create');
    Route::get('/StructUnit/store', 'StructUnitController@store')->name('moderator.StructUnit.store');
});

Route::group(['prefix' => 'admin','namespace'=>'admin','middleware' => 'auth'], function () {
    Route::get('/user', 'UserController@index')->name('admin.user.index');
    Route::get('/user/create', 'UserController@create')->name('admin.user.create');
    Route::get('/user/store', 'UserController@store')->name('admin.user.store');
});

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', '');