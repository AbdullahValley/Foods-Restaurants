<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::orderBy('id', 'desc')->get();
        return view ('admin.location.city.index', compact('cities'));
    }


    public function create()
    {
        return view ('admin.location.city.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'photo'         => 'mimes:jpeg,png',
        ]);

        $cities = new City();

        $cities->unique_id        = substr(md5(time()),12);
        $cities->country_id       = $request->country_id;
        $cities->name             = $request->name;
        $cities->display_name     = $request->display_name;
        $cities->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $cities->avatar = $file->getClientOriginalName();
            }
        }

        $cities->status   = $request->status;

        $cities->save();

        return redirect('food-admin/cities')->with('successMsg', 'This City Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $city = City::find($id);
        return view ('admin.location.city.edit',compact('city'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'photo'         => 'mimes:jpeg,png',
        ]);

        $cities = City::find($id);

        $cities->country_id       = $request->country_id;
        $cities->name             = $request->name;
        $cities->display_name     = $request->display_name;
        $cities->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $cities->avatar = $file->getClientOriginalName();
            }
        }

        $cities->status   = $request->status;

        $cities->save();

        return redirect('food-admin/cities')->with('successMsg', 'The City Updated Successfully!');
    }

    public function destroy($id)
    {
        City::destroy($id);
        return redirect('food-admin/cities')->with('successMsg', 'The City Deleted Successfully!');
    }
}
