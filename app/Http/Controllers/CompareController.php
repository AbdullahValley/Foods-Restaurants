<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Illuminate\Http\Request;

class CompareController extends Controller
{

    public function index()
    {
        $foods = Food::orderBy('id', 'desc')->where('status', 1)->get();
        
        return view('front-view.compare', compact('foods'));
    }


    public function view(Request $request)
    {
        $food_1 = Food::where('id', $request->food_id_1)->get();
        $food_2 = Food::where('id', $request->food_id_2)->get();
        $food_3 = Food::where('id', $request->food_id_3)->get();

        return view ('front-view.compare_result', compact('food_1', 'food_2', 'food_3'));
    }


    public function restaurant_index()
    {
        $restaurants = Restaurant::orderBy('id', 'desc')->where('status', 1)->get();

        return view('front-view.compare', compact('restaurants'));
    }


    public function restaurant_view(Request $request)
    {
        $restaurant_1 = Restaurant::where('id', $request->restaurant_id_1)->get();
        $restaurant_2 = Restaurant::where('id', $request->restaurant_id_2)->get();
        $restaurant_3 = Restaurant::where('id', $request->restaurant_id_3)->get();

        return view ('front-view.compare_result', compact('restaurant_1', 'restaurant_2', 'restaurant_3'));
    }



}
