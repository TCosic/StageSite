<?php

Route::get('/', 'IndexController@index')->name('index');

Route::auth();

Route::get('/home', 'HomeController@index');
