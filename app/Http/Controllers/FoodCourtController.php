<?php

namespace App\Http\Controllers;

use App\FoodCourt;
use App\SubLocation;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FoodCourtController extends Controller
{
    public function index()
    {
        $food_courts = FoodCourt::orderBy('id', 'desc')->get();
        return view ('admin.food-court.index', compact('food_courts'));
    }


    public function create()
    {
        $sub_locations = SubLocation::orderBy('id')->get();

        return view ('admin.food-court.create', compact('sub_locations'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'avatar'        => 'mimes:jpeg,png',
        ]);

        $food_court = new FoodCourt();

        $food_court->unique_id        = substr(md5(time()),12);
        $food_court->sub_location_id  = $request->sub_location_id;
        $food_court->name             = $request->name;
        $food_court->display_name     = $request->display_name;
        $food_court->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_court->avatar = $file->getClientOriginalName();
            }
        }

        $food_court->status   = $request->status;

        $food_court->save();

        return redirect('food-admin/food-courts')->with('successMsg', 'This Food Court Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $food_court = FoodCourt::find($id);

        $sub_locations = SubLocation::orderBy('id')->get();

        return view ('admin.food-court.edit',compact('food_court', 'sub_locations'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'avatar'         => 'mimes:jpeg,png',
        ]);

        $food_court = FoodCourt::find($id);

        $food_court->sub_location_id  = $request->sub_location_id;
        $food_court->name             = $request->name;
        $food_court->display_name     = $request->display_name;
        $food_court->details          = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_court->avatar = $file->getClientOriginalName();
            }
        }

        $food_court->status   = $request->status;

        $food_court->save();

        return redirect('food-admin/food-courts')->with('successMsg', 'The Food Court Updated Successfully!');
    }

    public function destroy($id)
    {
        FoodCourt::destroy($id);
        return redirect('food-admin/food-courts')->with('successMsg', 'The Food Court Deleted Successfully!');
    }
}
