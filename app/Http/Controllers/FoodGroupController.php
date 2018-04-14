<?php

namespace App\Http\Controllers;

use App\FoodGroup;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FoodGroupController extends Controller
{
    public function index()
    {
        $food_groups = FoodGroup::orderBy('id', 'desc')->get();
        return view ('admin.food-group.index', compact('food_groups'));
    }


    public function create()
    {
        return view ('admin.food-group.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'details'       => 'required',
            'avatar'        => 'mimes:jpeg,png',
        ]);

        $food_group = new FoodGroup();

        $food_group->unique_id     = substr(md5(time()),12);
        $food_group->name          = $request->name;
        $food_group->display_name  = $request->display_name;
        $food_group->details       = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_group->avatar = $file->getClientOriginalName();
            }
        }

        $food_group->status   = $request->status;

        $food_group->save();

        return redirect('food-admin/food-groups')->with('successMsg', 'This Food Group Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $food_group = FoodGroup::find($id);
        return view ('admin.food-group.edit',compact('food_group'));
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

        $food_group = FoodGroup::find($id);

        $food_group->name          = $request->name;
        $food_group->display_name  = $request->display_name;
        $food_group->details       = $request->details;

        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image){
                $food_group->avatar   = $file->getClientOriginalName();
            }
        }

        $food_group->status   = $request->status;

        $food_group->save();

        return redirect('food-admin/food-groups')->with('successMsg', 'The Food Group Updated Successfully!');
    }

    public function destroy($id)
    {
        FoodGroup::destroy($id);
        return redirect('food-admin/food-groups')->with('successMsg', 'The Food Group Deleted Successfully!');
    }
}
