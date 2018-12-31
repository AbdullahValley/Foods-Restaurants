<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index()
    {
        $q = Input::get('q');
        $search_for = Input::get('search_for');

        if($search_for == 'Restaurants'){

            $restaurants = Restaurant::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $q . '%')->orWhere('display_name', 'LIKE', '%' . $q . '%')->get();
            if (count($restaurants) > 0)
                return view('front-view.search')->withRestaurants($restaurants)->withQuery($q);
            else return view('front-view.search')->withMessage('No Restaurant found. Try to search again !');
        }

        elseif ($search_for == 'Foods'){

            $foods = Food::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $q . '%')->orWhere('display_name', 'LIKE', '%' . $q . '%')->get();
            if (count($foods) > 0)
                return view('front-view.search')->withFoods($foods)->withQuery($q);
            else return view('front-view.search')->withMessage('No Food found. Try to search again !');
        }

    }
}
