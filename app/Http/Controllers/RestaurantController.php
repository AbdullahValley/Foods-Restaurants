<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::orderBy('id', 'desc')->get();
        return view ('admin.restaurant.index', compact('restaurants'));
    }


    public function create()
    {
        return view ('admin.restaurant.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'photo'         => 'mimes:jpeg,png',
        ]);

        $restaurant = new Restaurant();

        $restaurant->unique_id        = substr(md5(time()),12);
        $restaurant->user_id          = Auth::id();
        $restaurant->name             = $request->name;
        $restaurant->display_name     = $request->display_name;
        $restaurant->details          = $request->details;
        $restaurant->email            = $request->email;
        $restaurant->phone            = $request->phone;
        $restaurant->facilities       = $request->facilities;
        $restaurant->capacity         = $request->capacity;
        $restaurant->pros             = $request->pros;
        $restaurant->cons             = $request->cons;
        $restaurant->our_opinion      = $request->our_opinion;
        $restaurant->types            = $request->types;
        $restaurant->categories       = $request->categories;
        $restaurant->city             = $request->city;
        $restaurant->location         = $request->location;
        $restaurant->sub_location     = $request->sub_location;
        $restaurant->food_court       = $request->food_court;
        $restaurant->food_groups	  = $request->food_groups;
        $restaurant->competitors      = $request->competitors;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant->photo = $file->getClientOriginalName();
            }
        }

        $restaurant->video    = $request->video;
        $restaurant->rating   = $request->rating;
        $restaurant->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $restaurant->status   = $request->status;

        $restaurant->save();

        return redirect('food-admin/restaurants')->with('successMsg', 'This Restaurant Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view ('admin.restaurant.edit',compact('restaurant'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'photo'         => 'mimes:jpeg,png',
        ]);

        $restaurant = Restaurant::find($id);

        $restaurant->name             = $request->name;
        $restaurant->display_name     = $request->display_name;
        $restaurant->details          = $request->details;
        $restaurant->email            = $request->email;
        $restaurant->phone            = $request->phone;
        $restaurant->facilities       = $request->facilities;
        $restaurant->capacity         = $request->capacity;
        $restaurant->pros             = $request->pros;
        $restaurant->cons             = $request->cons;
        $restaurant->our_opinion      = $request->our_opinion;
        $restaurant->types            = $request->types;
        $restaurant->categories       = $request->categories;
        $restaurant->city             = $request->city;
        $restaurant->location         = $request->location;
        $restaurant->sub_location     = $request->sub_location;
        $restaurant->food_court       = $request->food_court;
        $restaurant->food_groups	  = $request->food_groups;
        $restaurant->competitors      = $request->competitors;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant->photo = $file->getClientOriginalName();
            }
        }

        $restaurant->video    = $request->video;
        $restaurant->rating   = $request->rating;
        $restaurant->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $restaurant->status   = $request->status;

        $restaurant->save();

        return redirect('food-admin/restaurants')->with('successMsg', 'The Restaurant Updated Successfully!');
    }

    public function destroy($id)
    {
        Restaurant::destroy($id);
        return redirect('food-admin/restaurants')->with('successMsg', 'The Restaurant Deleted Successfully!');
    }
}
