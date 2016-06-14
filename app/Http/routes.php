<?php

//Route::get('/', 'IndexController@index')->name('index');
//
//Route::auth();
//
//Route::get('/home', 'HomeController@index');

/**
 * Web Routes
 */
Route::group(['middleware' => ['web']], function() {
    Route::auth();
    Route::group([/*'middleware' => ['auth'], */'namespace' => 'Web'], function(){
        Route::get('/', 'IndexController@index')->name('index');
        Route::resource('stage', 'InternshipController', ['only' => ['index', 'show', 'create', 'edit']]);
        Route::get('accounts', 'AccountController@index')->name('accounts.index');
    });

    /**
     * Admin Routes
     */
    Route::group(['middleware' => ['auth', 'login'], 'namespace' => 'Web', 'prefix' => 'login', 'as' => 'login.'], function() {
        Route::get('accounts', 'AccountController@index')->name('accounts.index');
    });

    /**
     * Api Routes
     */
    Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function() {
        Route::post('stage/search', 'InternshipController@search')->name('stage.search');
        Route::resource('stage', 'internshipController', ['only' => ['store', 'update', 'destroy']]);
    });
});