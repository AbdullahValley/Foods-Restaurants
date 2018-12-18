<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;

class CompareController extends Controller
{

    public function index()
    {

        $foods = Food::orderBy('id', 'desc')->where('status', 1)->get();

        $restaurants = Restaurant::orderBy('id', 'desc')->where('status', 1)->get();

        return view('front-view.compare', compact('foods', 'restaurants'));
    }


    public function view()
    {
        //
    }




}
