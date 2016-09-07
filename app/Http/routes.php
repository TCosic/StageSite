<?php

/**
 * Web Routes
 */
Route::auth();

Route::group(['namespace' => 'Web'], function(){
    Route::get('/', 'IndexController@index')->name('index');

    Route::group(['middleware' => ['auth']], function() {
        Route::resource('stage', 'InternshipController', ['only' => ['create', 'edit']]);
        Route::resource('bedrijf', 'CompanyController', ['only' => ['create', 'edit']]);
    });

    Route::resource('stage', 'InternshipController', ['only' => ['index', 'show']]);
    Route::resource('bedrijf', 'CompanyController', ['only' => ['index', 'show']]);

});

/**
 * Logged in Routes
 */
Route::group(['middleware' => ['auth'], 'namespace' => 'Web', 'as' => 'login.'], function () {
    Route::get('account', 'AccountController@index')->name('account.index');

    Route::group(['middleware' => ['login'], 'as' => 'login.'], function() {
        Route::get('admin', 'AdminController@index')->name('admin.index');
    });
});


/**
 * Api Routes
 */
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function() {
    Route::post('stage/search', 'InternshipController@search')->name('stage.search');
    Route::post('stage/review', 'InternshipController@review')->name('stage.review');
    Route::resource('stage', 'InternshipController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('bedrijf', 'CompanyController', ['only' => ['store', 'update', 'destroy']]);
});

