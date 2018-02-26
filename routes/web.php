<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/food-admin', 'AdminController@index')->name('admin');




Route::group(['prefix' => 'food-admin',  'middleware' => 'auth'], function()
{

    Route::resource('users', 'UserController');


});
