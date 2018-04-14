<?php

namespace App\Http\Controllers;

use App\FoodRecipe;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class FoodRecipeController extends Controller
{
    public function index()
    {
        $food_recipes = FoodRecipe::orderBy('id', 'desc')->get();
        return view ('admin.food-recipe.index', compact('food_recipes'));
    }


    public function create()
    {
        return view ('admin.food-recipe.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $food_recipe = new FoodRecipe();

        $food_recipe->unique_id        = substr(md5(time()),12);
        $food_recipe->user_id          = Auth::id();
        $food_recipe->title            = $request->title;
        $food_recipe->slug             = $request->slug;
        $food_recipe->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_recipe->photo = $file->getClientOriginalName();
            }
        }

        $food_recipe->video    = $request->video;
        $food_recipe->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food_recipe->status   = $request->status;

        $food_recipe->save();

        return redirect('food-admin/food-recipes')->with('successMsg', 'This Food Recipe Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $food_recipe = FoodRecipe::find($id);
        return view ('admin.food-recipe.edit',compact('food_recipe'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $food_recipe = FoodRecipe::find($id);

        $food_recipe->title            = $request->title;
        $food_recipe->slug             = $request->slug;
        $food_recipe->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_recipe->photo = $file->getClientOriginalName();
            }
        }

        $food_recipe->video    = $request->video;
        $food_recipe->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food_recipe->status   = $request->status;

        $food_recipe->save();

        return redirect('food-admin/food-recipes')->with('successMsg', 'The Food Recipe Updated Successfully!');
    }

    public function destroy($id)
    {
        FoodRecipe::destroy($id);
        return redirect('food-admin/food-recipes')->with('successMsg', 'The Food Recipe Deleted Successfully!');
    }
}
