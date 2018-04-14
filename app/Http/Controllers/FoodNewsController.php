<?php

namespace App\Http\Controllers;

use App\FoodNews;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class FoodNewsController extends Controller
{
    public function index()
    {
        $food_news = FoodNews::orderBy('id', 'desc')->get();
        return view ('admin.food-news.index', compact('food_news'));
    }


    public function create()
    {
        return view ('admin.food-news.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $food_news = new FoodNews();

        $food_news->unique_id        = substr(md5(time()),12);
        $food_news->user_id          = Auth::id();
        $food_news->title            = $request->title;
        $food_news->slug             = $request->slug;
        $food_news->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_news->photo = $file->getClientOriginalName();
            }
        }

        $food_news->video    = $request->video;
        $food_news->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food_news->status   = $request->status;

        $food_news->save();

        return redirect('food-admin/food-news')->with('successMsg', 'This Food News Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $food_news = FoodNews::find($id);
        return view ('admin.food-news.edit',compact('food_news'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $food_news = FoodNews::find($id);

        $food_news->title            = $request->title;
        $food_news->slug             = $request->slug;
        $food_news->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_news->photo = $file->getClientOriginalName();
            }
        }

        $food_news->video    = $request->video;
        $food_news->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food_news->status   = $request->status;

        $food_news->save();

        return redirect('food-admin/food-news')->with('successMsg', 'The Food News Updated Successfully!');
    }

    public function destroy($id)
    {
        FoodNews::destroy($id);
        return redirect('food-admin/food-news')->with('successMsg', 'The Food News Deleted Successfully!');
    }
}
