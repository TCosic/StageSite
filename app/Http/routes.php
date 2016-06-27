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
    });

    /**
     * Logged in Routes
     */
    Route::group(['middleware' => ['auth'], 'namespace' => 'Web', 'as' => 'login.'], function () {
        Route::get('accounts', 'AccountController@index')->name('accounts.index');

        Route::group(['middleware' => ['login'], 'as' => 'login.'], function() {
            Route::get('admin', 'AdminController@index')->name('admin.index');

        });
    });


    /**
     * Api Routes
     */
    Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function() {
        Route::post('stage/search', 'InternshipController@search')->name('stage.search');
        Route::resource('stage', 'internshipController', ['only' => ['store', 'update', 'destroy']]);
    });
});

