<?php

namespace App\Http\Controllers;

use App\SubLocation;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SubLocationController extends Controller
{
    public function index()
    {
        $sub_locations = SubLocation::orderBy('id', 'desc')->get();
        return view ('admin.location.sub-location.index', compact('sub_locations'));
    }


    public function create()
    {
        return view ('admin.location.sub-location.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'avatar'         => 'mimes:jpeg,png',
        ]);

        $sub_locations = new SubLocation();

        $sub_locations->unique_id        = substr(md5(time()),12);
        $sub_locations->location_id      = $request->location_id;
        $sub_locations->name             = $request->name;
        $sub_locations->display_name     = $request->display_name;
        $sub_locations->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $sub_locations->avatar = $file->getClientOriginalName();
            }
        }

        $sub_locations->status   = $request->status;

        $sub_locations->save();

        return redirect('food-admin/sub-locations')->with('successMsg', 'This Sub Location Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $sub_location = SubLocation::find($id);
        return view ('admin.location.sub-location.edit',compact('sub_location'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'avatar'         => 'mimes:jpeg,png',
        ]);

        $sub_locations = SubLocation::find($id);

        $sub_locations->location_id      = $request->location_id;
        $sub_locations->name             = $request->name;
        $sub_locations->display_name     = $request->display_name;
        $sub_locations->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $sub_locations->avatar = $file->getClientOriginalName();
            }
        }

        $sub_locations->status   = $request->status;

        $sub_locations->save();

        return redirect('food-admin/sub-locations')->with('successMsg', 'The Sub Location Updated Successfully!');
    }

    public function destroy($id)
    {
        SubLocation::destroy($id);
        return redirect('food-admin/sub-locations')->with('successMsg', 'The Sub Location Deleted Successfully!');
    }
}
