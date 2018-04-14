<?php

namespace App\Http\Controllers;

use App\RestaurantReview;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class RestaurantReviewController extends Controller
{
    public function index()
    {
        $restaurant_reviews = RestaurantReview::orderBy('id', 'desc')->get();
        return view ('admin.restaurant-review.index', compact('restaurant_reviews'));
    }


    public function create()
    {
        return view ('admin.restaurant-review.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $restaurant_review = new RestaurantReview();

        $restaurant_review->unique_id        = substr(md5(time()),12);
        $restaurant_review->user_id          = Auth::id();
        $restaurant_review->restaurant_id    = $request->restaurant_id;
        $restaurant_review->name             = $request->name;
        $restaurant_review->email            = $request->email;
        $restaurant_review->phone            = $request->phone;
        $restaurant_review->title            = $request->title;
        $restaurant_review->slug             = $request->slug;
        $restaurant_review->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_review->photo = $file->getClientOriginalName();
            }
        }

        $restaurant_review->video    = $request->video;
        $restaurant_review->rating   = $request->rating;
        $restaurant_review->featured = $request->featured == null ? $request->featured = 0 : $request->featured;
        $restaurant_review->status   = $request->status;

        $restaurant_review->save();

        return redirect('food-admin/restaurant-reviews')->with('successMsg', 'This Restaurant Review Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $restaurant_review = RestaurantReview::find($id);
        return view ('admin.restaurant-review.edit',compact('restaurant_review'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $restaurant_review = RestaurantReview::find($id);

        $restaurant_review->restaurant_id    = $request->restaurant_id;
        $restaurant_review->name             = $request->name;
        $restaurant_review->email            = $request->email;
        $restaurant_review->phone            = $request->phone;
        $restaurant_review->title            = $request->title;
        $restaurant_review->slug             = $request->slug;
        $restaurant_review->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $restaurant_review->photo = $file->getClientOriginalName();
            }
        }

        $restaurant_review->video    = $request->video;
        $restaurant_review->rating   = $request->rating;
        $restaurant_review->featured = $request->featured == null ? $request->featured = 0 : $request->featured;
        $restaurant_review->status   = $request->status;

        $restaurant_review->save();

        return redirect('food-admin/restaurant-reviews')->with('successMsg', 'The Restaurant Review Updated Successfully!');
    }

    public function destroy($id)
    {
        RestaurantReview::destroy($id);
        return redirect('food-admin/restaurant-reviews')->with('successMsg', 'The Restaurant Review Deleted Successfully!');
    }
}