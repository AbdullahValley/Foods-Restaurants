<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FrontFoodController extends Controller
{

    public function index()
    {
        $foods = Food::orderBy('id', 'desc')->limit(12)->where('status', 1)->get();
        return view ('front-view.foods', compact('foods'));
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
