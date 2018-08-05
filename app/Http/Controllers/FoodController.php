<?php

namespace App\Http\Controllers;

use App\Food;
use App\FoodCourt;
use App\Restaurant;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::orderBy('id', 'desc')->get();
        return view ('admin.food.index', compact('foods'));
    }


    public function create()
    {
        $restaurants = Restaurant::orderBy('id')->get();

        $food_courts = FoodCourt::orderBy('id')->get();

        return view ('admin.food.create', compact('restaurants', 'food_courts'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'photo'         => 'mimes:jpeg,png',
        ]);

        $food = new Food();

        $food->unique_id        = substr(md5(time()),12);
        $food->user_id          = Auth::id();
        $food->restaurant_id    = $request->restaurant_id;
        $food->name             = $request->name;
        $food->display_name     = $request->display_name;
        $food->details          = $request->details;
        $food->pros             = $request->pros;
        $food->cons             = $request->cons;
        $food->our_opinion      = $request->our_opinion;
        $food->types            = $request->types;
        $food->categories       = $request->categories;
        $food->food_court       = $request->food_court;
        $food->food_groups	    = $request->food_groups;
        $food->competitors      = $request->competitors;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food->photo = $file->getClientOriginalName();
            }
        }

        $food->video    = $request->video;
        $food->rating   = $request->rating;
        $food->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food->status   = $request->status;

        $food->save();

        return redirect('food-admin/foods')->with('successMsg', 'This Food Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $food = Food::find($id);

        $restaurants = Restaurant::orderBy('id')->get();
        $food_courts = FoodCourt::orderBy('id')->get();

        return view ('admin.food.edit',compact('food','restaurants', 'food_courts'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'photo'         => 'mimes:jpeg,png',
        ]);

        $food = Food::find($id);

        $food->restaurant_id    = $request->restaurant_id;
        $food->name             = $request->name;
        $food->display_name     = $request->display_name;
        $food->details          = $request->details;
        $food->pros             = $request->pros;
        $food->cons             = $request->cons;
        $food->our_opinion      = $request->our_opinion;
        $food->types            = $request->types;
        $food->categories       = $request->categories;
        $food->food_court       = $request->food_court;
        $food->food_groups	    = $request->food_groups;
        $food->competitors      = $request->competitors;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food->photo = $file->getClientOriginalName();
            }
        }

        $food->video    = $request->video;
        $food->rating   = $request->rating;
        $food->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food->status   = $request->status;

        $food->save();

        return redirect('food-admin/foods')->with('successMsg', 'The Food Updated Successfully!');
    }

    public function destroy($id)
    {
        Food::destroy($id);
        return redirect('food-admin/foods')->with('successMsg', 'The Food Deleted Successfully!');
    }
}
