<?php

Route::get('/', function () {
    return view('master');
});

Route::auth();

Route::get('/home', 'HomeController@index');
