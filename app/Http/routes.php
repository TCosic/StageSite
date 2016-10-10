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
        Route::resource('tool', 'ToolController', ['only' => ['create', 'edit']]);
        Route::resource('user', 'UserController', ['only' => ['create', 'edit']]);
    });

    Route::resource('stage', 'InternshipController', ['only' => ['index', 'show']]);
    Route::resource('bedrijf', 'CompanyController', ['only' => ['index', 'show']]);

});

/**
 * Logged in Routes
 */
Route::group(['middleware' => ['auth'], 'namespace' => 'Web', 'as' => 'login.'], function () {
    Route::get('account', 'AccountController@index')->name('account.index');

    Route::group(['middleware' => ['login']], function() {
        Route::get('admin', 'AdminController@index')->name('admin.index');
        Route::get('admin/tool', 'AdminController@tool')->name('admin.tool');
        Route::get('admin/user', 'AdminController@user')->name('admin.user');
        Route::get('admin/company', 'AdminController@company')->name('admin.company');
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
    Route::resource('tool', 'ToolController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('user', 'UserController', ['only' => ['store', 'update', 'destroy']]);
});

