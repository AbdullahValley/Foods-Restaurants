<?php

namespace App\Http\Controllers;

use App\RestaurantCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RestaurantCategoryController extends Controller
{
    public function index()
    {
        $restaurant_categories = RestaurantCategory::orderBy('id', 'desc')->get();
        return view ('admin.restaurant-category.index', compact('restaurant_categories'));
    }


    public function create()
    {
        return view ('admin.restaurant-category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'display_name'  => 'required',
            'details'       => 'required',
            'avatar'        => 'mimes:jpeg,png',
        ]);

        $restaurant_category = new RestaurantCategory();

        $restaurant_category->unique_id     = substr(md5(time()),12);
        $restaurant_category->name          = $request->name;
        $restaurant_category->display_name  = $request->display_name;
        $restaurant_category->details       = $request->details;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_category->avatar = $file->getClientOriginalName();
            }
        }

        $restaurant_category->status   = $request->status;

        $restaurant_category->save();

        return redirect('food-admin/restaurant-categories')->with('successMsg', 'This Restaurant Category Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $restaurant_category = RestaurantCategory::find($id);
        return view ('admin.restaurant-category.edit',compact('restaurant_category'));
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

        $restaurant_category = RestaurantCategory::find($id);

        $restaurant_category->name          = $request->name;
        $restaurant_category->display_name  = $request->display_name;
        $restaurant_category->details       = $request->details;

        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $image = Image::make($file)->resize(200, null, function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image){
                $restaurant_category->avatar   = $file->getClientOriginalName();
            }
        }

        $restaurant_category->status   = $request->status;

        $restaurant_category->save();

        return redirect('food-admin/restaurant-categories')->with('successMsg', 'The Restaurant Category Updated Successfully!');
    }

    public function destroy($id)
    {
        RestaurantCategory::destroy($id);
        return redirect('food-admin/restaurant-categories')->with('successMsg', 'The Restaurant Category Deleted Successfully!');
    }
}
