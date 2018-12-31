<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class FrontRestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::orderBy('id', 'desc')->where('status', 1)->get();
        return view ('front-view.restaurants', compact('restaurants'));
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
