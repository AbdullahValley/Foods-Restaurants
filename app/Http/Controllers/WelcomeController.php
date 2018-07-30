<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\RestaurantCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $restaurant_categories = RestaurantCategory::orderBy('id', 'desc')->limit(8)->where('status', 1)->get();

        $restaurants = Restaurant::orderBy('id', 'desc')->limit(3)->where('status', 1)->get();

        return view('front-view.layouts.app', compact('restaurant_categories', 'restaurants'));
    }


    public function get_category_name($id)
    {
        $restaurant_category = RestaurantCategory::find($id);
        return view('front-view.restaurant_category', compact('restaurant_category'));
    }


    public function get_restaurant_name($id)
    {
        $restaurants = Restaurant::find($id);
        return view('front-view.details', compact('restaurants'));
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
