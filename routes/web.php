<?php

Route::get('/', function () {
    return view('front-view/layouts/app');
});

// These routes is for welcome page category show ...

Route::resource('/', 'WelcomeController');

Route::resource('/restaurant-list/', 'FrontRestaurantController');

Route::resource('/food-list/', 'FrontFoodController');


Route::any('/search', 'SearchController@index')->name('search');


Route::get('/restaurant-categories/{id}', 'WelcomeController@get_category_name');
Route::get('/restaurants/{id}', 'WelcomeController@get_restaurant_details');
Route::get('/restaurant-types/{id}', 'WelcomeController@get_restaurant_type');

Route::get('/food/{id}', 'WelcomeController@get_food_details');


Route::resource('/cart', 'CartController');


Route::get('/session', function (){

    $data = session()->all();

    return $data;
});


Route::get('/food-compare', 'CompareController@index')->name('food-compare');
Route::post('/food-compare-view', 'CompareController@view')->name('food-compare-view');;


Route::get('/restaurant-compare', 'CompareController@restaurant_index')->name('restaurant-compare');
Route::post('/restaurant-compare-view', 'CompareController@restaurant_view')->name('restaurant-compare-view');



Route::get('/about', function () {
    return view ('front-view.about');
});


Route::get('/contact', function () {
    return view ('front-view.contact');
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

    Route::resource('orders', 'OrderController');

    Route::get('today-orders', 'ReportController@today_orders');

    Route::get('profit-loss', 'ReportController@profit_loss');


});