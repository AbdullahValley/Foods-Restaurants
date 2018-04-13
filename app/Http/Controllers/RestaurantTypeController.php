<?php

namespace App\Http\Controllers;

use App\RestaurantType;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RestaurantTypeController extends Controller
{
    public function index()
    {
        $restaurant_types = RestaurantType::orderBy('id', 'desc')->get();
        return view ('admin.restaurant-type.index', compact('restaurant_types'));
    }


    public function create()
    {
        return view ('admin.restaurant-type.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'details'       => 'required',
            'avatar'        => 'mimes:jpeg,png',
        ]);

        $restaurant_type = new RestaurantType();

        $restaurant_type->unique_id     = substr(md5(time()),12);
        $restaurant_type->name          = $request->name;
        $restaurant_type->display_name  = $request->display_name;
        $restaurant_type->details       = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_type->avatar = $file->getClientOriginalName();
            }
        }

        $restaurant_type->status   = $request->status;

        $restaurant_type->save();

        return redirect('food-admin/restaurant-types')->with('successMsg', 'This Restaurant Type Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $restaurant_type = RestaurantType::find($id);
        return view ('admin.restaurant-type.edit',compact('restaurant_type'));
    }


    public function update(Request $request, $id)
    {
        //dd($request);

        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'details'       => 'required',
            'avatar'        => 'mimes:jpeg,png',
        ]);

        $restaurant_type = RestaurantType::find($id);

        $restaurant_type->name          = $request->name;
        $restaurant_type->display_name  = $request->display_name;
        $restaurant_type->details       = $request->details;

        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image){
                $restaurant_type->avatar   = $file->getClientOriginalName();
            }
        }

        $restaurant_type->status   = $request->status;

        $restaurant_type->save();

        return redirect('food-admin/restaurant-types')->with('successMsg', 'The User Updated Successfully!');
    }

    public function destroy($id)
    {
        RestaurantType::destroy($id);
        return redirect('food-admin/restaurant-types')->with('successMsg', 'The Restaurant Types Deleted Successfully!');
    }
}
