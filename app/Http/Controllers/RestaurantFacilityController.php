<?php

namespace App\Http\Controllers;

use App\RestaurantFacility;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RestaurantFacilityController extends Controller
{
    public function index()
    {
        $restaurant_facilities = RestaurantFacility::orderBy('id', 'desc')->get();
        return view ('admin.restaurant-facility.index', compact('restaurant_facilities'));
    }


    public function create()
    {
        return view ('admin.restaurant-facility.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'details'       => 'required',
            'avatar'        => 'mimes:jpeg,png',
        ]);

        $restaurant_facility = new RestaurantFacility();

        $restaurant_facility->unique_id     = substr(md5(time()),12);
        $restaurant_facility->name          = $request->name;
        $restaurant_facility->display_name  = $request->display_name;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_facility->avatar = $file->getClientOriginalName();
            }
        }

        $restaurant_facility->status   = $request->status;

        $restaurant_facility->save();

        return redirect('food-admin/restaurant-facilities')->with('successMsg', 'This Restaurant Facility Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $restaurant_facility = RestaurantFacility::find($id);
        return view ('admin.restaurant-facility.edit',compact('restaurant_facility'));
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

        $restaurant_facility = RestaurantFacility::find($id);

        $restaurant_facility->name          = $request->name;
        $restaurant_facility->display_name  = $request->display_name;

        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image){
                $restaurant_facility->avatar   = $file->getClientOriginalName();
            }
        }

        $restaurant_facility->status   = $request->status;

        $restaurant_facility->save();

        return redirect('food-admin/restaurant-facilities')->with('successMsg', 'The Restaurant Facility Updated Successfully!');
    }

    public function destroy($id)
    {
        RestaurantFacility::destroy($id);
        return redirect('food-admin/restaurant-facilities')->with('successMsg', 'The Restaurant Facility Deleted Successfully!');
    }
}
