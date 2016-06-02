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
        Route::resource('stage', 'InternshipController', ['only' => ['index', 'show']]);
    });

    /**
     * Admin Routes
     */
    Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Web', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('accounts', 'AccountController@index')->name('accounts.index');
    });

    /**
     * Api Routes
     */
    Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function() {
        Route::post('contact/search', 'ContactController@search')->name('contact.search');
        Route::resource('contact', 'ContactController', ['only' => ['store', 'update', 'destroy']]);
    });
});