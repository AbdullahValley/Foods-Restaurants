<?php

namespace App\Http\Controllers;

use App\RestaurantTips;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class RestaurantTipsController extends Controller
{
    public function index()
    {
        $restaurant_tips = RestaurantTips::orderBy('id', 'desc')->get();
        return view ('admin.restaurant-tips.index', compact('restaurant_tips'));
    }


    public function create()
    {
        return view ('admin.restaurant-tips.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $restaurant_tips = new RestaurantTips();

        $restaurant_tips->unique_id        = substr(md5(time()),12);
        $restaurant_tips->user_id          = Auth::id();
        $restaurant_tips->title            = $request->title;
        $restaurant_tips->slug             = $request->slug;
        $restaurant_tips->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_tips->photo = $file->getClientOriginalName();
            }
        }

        $restaurant_tips->video    = $request->video;
        $restaurant_tips->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $restaurant_tips->status   = $request->status;

        $restaurant_tips->save();

        return redirect('food-admin/restaurant-tips')->with('successMsg', 'This Restaurant Tips Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $restaurant_tips = RestaurantTips::find($id);
        return view ('admin.restaurant-tips.edit',compact('restaurant_tips'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $restaurant_tips = RestaurantTips::find($id);

        $restaurant_tips->title            = $request->title;
        $restaurant_tips->slug             = $request->slug;
        $restaurant_tips->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_tips->photo = $file->getClientOriginalName();
            }
        }

        $restaurant_tips->video    = $request->video;
        $restaurant_tips->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $restaurant_tips->status   = $request->status;

        $restaurant_tips->save();

        return redirect('food-admin/restaurant-tips')->with('successMsg', 'The Restaurant Tips Updated Successfully!');
    }

    public function destroy($id)
    {
        RestaurantTips::destroy($id);
        return redirect('food-admin/restaurant-tips')->with('successMsg', 'The Restaurant Tips Deleted Successfully!');
    }
}
