<?php

namespace App\Http\Controllers;

use App\City;
use App\Location;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('id', 'desc')->get();
        return view ('admin.location.index', compact('locations'));
    }


    public function create()
    {
        $cities = City::orderBy('id')->get();

        return view ('admin.location.create', compact('cities'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'avatar'         => 'mimes:jpeg,png',
        ]);

        $locations = new Location();

        $locations->unique_id        = substr(md5(time()),12);
        $locations->city_id          = $request->city_id;
        $locations->name             = $request->name;
        $locations->display_name     = $request->display_name;
        $locations->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $locations->avatar = $file->getClientOriginalName();
            }
        }

        $locations->status   = $request->status;

        $locations->save();

        return redirect('food-admin/locations')->with('successMsg', 'This Location Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $city = Location::find($id);

        $cities = City::orderBy('id')->get();

        return view ('admin.location.edit',compact('city', 'cities'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'avatar'         => 'mimes:jpeg,png',
        ]);

        $locations = Location::find($id);

        $locations->city_id          = $request->city_id;
        $locations->name             = $request->name;
        $locations->display_name     = $request->display_name;
        $locations->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $locations->avatar = $file->getClientOriginalName();
            }
        }

        $locations->status   = $request->status;

        $locations->save();

        return redirect('food-admin/locations')->with('successMsg', 'The Location Updated Successfully!');
    }

    public function destroy($id)
    {
        Location::destroy($id);
        return redirect('food-admin/locations')->with('successMsg', 'The Location Deleted Successfully!');
    }
}
