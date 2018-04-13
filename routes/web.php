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

    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');

    Route::get('role-permission', 'RolepermissionController@index');
    Route::post('role-permission', 'RolepermissionController@index');

    Route::get('recycle', 'UserController@recycle')->name('recycle');
    Route::put('users', 'UserController@temp_delete')->name('temp_delete');
    Route::patch('users', 'UserController@restore')->name('restore');

    Route::resource('restaurant-types', 'RestaurantTypeController');

});