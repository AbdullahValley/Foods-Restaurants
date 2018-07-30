<?php

Route::get('/', function () {
    return view('front-view/layouts/app');
});

// These routes is for welcome page category show ...

Route::resource('/', 'WelcomeController');
Route::get('/restaurant-categories/{id}', 'WelcomeController@get_category_name');
Route::get('/restaurants/{id}', 'WelcomeController@get_restaurant_name');


Route::get('/details', function () {
    return view('front-view/details');
});

Route::get('/restaurants', function () {
    return view('front-view/restaurants');
});

Route::get('/map', function () {
    return view('map');
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
    Route::resource('restaurant-categories', 'RestaurantCategoryController');
    Route::resource('restaurant-facilities', 'RestaurantFacilityController');
    Route::resource('food-groups', 'FoodGroupController');
    Route::resource('restaurant-reviews', 'RestaurantReviewController');
    Route::resource('restaurant-news', 'RestaurantNewsController');
    Route::resource('restaurant-tips', 'RestaurantTipsController');
    Route::resource('food-reviews', 'FoodReviewController');
    Route::resource('food-news', 'FoodNewsController');
    Route::resource('food-recipes', 'FoodRecipeController');
    Route::resource('cities', 'CityController');
    Route::resource('locations', 'LocationController');
    Route::resource('sub-locations', 'SubLocationController');
    Route::resource('food-courts', 'FoodCourtController');
    Route::resource('restaurant-comments', 'RestaurantCommentController');
    Route::resource('food-comments', 'FoodCommentController');
    Route::resource('restaurant-compares', 'RestaurantCompareController');
    Route::resource('food-compares', 'FoodCompareController');
    Route::resource('restaurants', 'RestaurantController');
    Route::resource('foods', 'FoodController');


});