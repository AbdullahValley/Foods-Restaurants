<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Support\Facades\DB;
use App\RestaurantCategory;
use App\RestaurantType;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $restaurant_categories = RestaurantCategory::orderBy('id', 'desc')->limit(8)->where('status', 1)->get();

        $restaurants = Restaurant::orderBy('id', 'desc')->limit(3)->where('status', 1)->get();

        $restaurant_types = RestaurantType::orderBy('id', 'desc')->limit(9)->where('status', 1)->get();

        return view('front-view.layouts.app', compact('restaurant_categories', 'restaurants', 'restaurant_types'));
    }


    public function get_category_name($id)
    {
        $restaurant_category = RestaurantCategory::find($id);
        $restaurants = Restaurant::orderBy('id', 'desc')->limit(16)->where('status', 1)->get();
        return view('front-view.restaurant_category', compact('restaurant_category', 'restaurants'));
    }


    public function get_restaurant_name($id)
    {
        $restaurants = Restaurant::find($id);


        $get_sub_location_id = DB::table("restaurants")->where('unique_id', $id)->pluck("sub_location");
        $get_sub_location_name = DB::table("sub_locations")->whereIn('id', $get_sub_location_id)->pluck("display_name");


        $get_location_id = DB::table("restaurants")->where('unique_id', $id)->pluck("location");
        $get_location_name = DB::table("locations")->whereIn('id', $get_location_id)->pluck("display_name");


        $get_food_court_id = DB::table("restaurants")->where('unique_id', $id)->pluck("food_court");
        $get_food_court_name = DB::table("food_courts")->whereIn('id', $get_food_court_id)->pluck("display_name");


        $get_city_id = DB::table("restaurants")->where('unique_id', $id)->pluck("city");
        $get_city_name = DB::table("cities")->whereIn('id', $get_city_id)->pluck("display_name");


        return view('front-view.details', compact('restaurants', 'get_sub_location_name', 'get_location_name', 'get_food_court_name', 'get_city_name'));
    }


    public function get_restaurant_type($id)
    {
        $restaurant_type = RestaurantType::find($id);
        $restaurants = Restaurant::orderBy('id', 'desc')->limit(16)->where('status', 1)->get();
        return view('front-view.restaurant_type', compact('restaurant_type', 'restaurants'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
