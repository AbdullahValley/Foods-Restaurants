<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $restaurants = Restaurant::orderBy('id', 'desc')->where('status', 1)->get();

        $foods = Food::orderBy('id', 'desc')->where('status', 1)->get();

        return view('front-view.cart', compact('restaurants', 'foods'));
    }

    public function create()
    {
        //
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
