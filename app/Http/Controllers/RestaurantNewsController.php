<?php

namespace App\Http\Controllers;

use App\RestaurantNews;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class RestaurantNewsController extends Controller
{
    public function index()
    {
        $restaurant_news = RestaurantNews::orderBy('id', 'desc')->get();
        return view ('admin.restaurant-news.index', compact('restaurant_news'));
    }


    public function create()
    {
        return view ('admin.restaurant-news.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $restaurant_news = new RestaurantNews();

        $restaurant_news->unique_id        = substr(md5(time()),12);
        $restaurant_news->user_id          = Auth::id();
        $restaurant_news->title            = $request->title;
        $restaurant_news->slug             = $request->slug;
        $restaurant_news->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_news->photo = $file->getClientOriginalName();
            }
        }

        $restaurant_news->video    = $request->video;
        $restaurant_news->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $restaurant_news->status   = $request->status;

        $restaurant_news->save();

        return redirect('food-admin/restaurant-news')->with('successMsg', 'This Restaurant News Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $restaurant_news = RestaurantNews::find($id);
        return view ('admin.restaurant-news.edit',compact('restaurant_news'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $restaurant_news = RestaurantNews::find($id);

        $restaurant_news->title            = $request->title;
        $restaurant_news->slug             = $request->slug;
        $restaurant_news->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_news->photo = $file->getClientOriginalName();
            }
        }

        $restaurant_news->video    = $request->video;
        $restaurant_news->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $restaurant_news->status   = $request->status;

        $restaurant_news->save();

        return redirect('food-admin/restaurant-news')->with('successMsg', 'The Restaurant News Updated Successfully!');
    }

    public function destroy($id)
    {
        RestaurantNews::destroy($id);
        return redirect('food-admin/restaurant-news')->with('successMsg', 'The Restaurant News Deleted Successfully!');
    }
}
