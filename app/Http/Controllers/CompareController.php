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

        $restaurants = Restaurant::orderBy('id', 'desc')->where('status', 1)->get();

        return view('front-view.compare', compact('foods', 'restaurants'));
    }


    public function view(Request $request)
    {
        $food_1 = Food::where('id', $request->food_id_1)->get();
        $food_2 = Food::where('id', $request->food_id_2)->get();
        $food_3 = Food::where('id', $request->food_id_3)->get();

        return view ('front-view.compare_result', compact('food_1', 'food_2', 'food_3'));
    }



}
