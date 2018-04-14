<?php

namespace App\Http\Controllers;

use App\FoodReview;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class FoodReviewController extends Controller
{
    public function index()
    {
        $food_reviews = FoodReview::orderBy('id', 'desc')->get();
        return view ('admin.food-review.index', compact('food_reviews'));
    }


    public function create()
    {
        return view ('admin.food-review.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $food_review = new FoodReview();

        $food_review->unique_id        = substr(md5(time()),12);
        $food_review->user_id          = Auth::id();
        $food_review->food_id          = $request->food_id;
        $food_review->name             = $request->name;
        $food_review->email            = $request->email;
        $food_review->phone            = $request->phone;
        $food_review->title            = $request->title;
        $food_review->slug             = $request->slug;
        $food_review->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_review->photo = $file->getClientOriginalName();
            }
        }

        $food_review->video    = $request->video;
        $food_review->rating   = $request->rating;
        $food_review->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food_review->status   = $request->status;

        $food_review->save();

        return redirect('food-admin/food-reviews')->with('successMsg', 'This Food Review Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $food_review = FoodReview::find($id);
        return view ('admin.food-review.edit',compact('food_review'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'          => 'required',
            'slug'           => 'required',
            'description'    => 'required',
            'photo'          => 'mimes:jpeg,png',
        ]);

        $food_review = FoodReview::find($id);

        $food_review->food_id          = $request->food_id;
        $food_review->name             = $request->name;
        $food_review->email            = $request->email;
        $food_review->phone            = $request->phone;
        $food_review->title            = $request->title;
        $food_review->slug             = $request->slug;
        $food_review->description      = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $food_review->photo = $file->getClientOriginalName();
            }
        }

        $food_review->video    = $request->video;
        $food_review->rating   = $request->rating;
        $food_review->featured = $request->featured == null ? $request->featured = '0' : $request->featured = '1';
        $food_review->status   = $request->status;

        $food_review->save();

        return redirect('food-admin/food-reviews')->with('successMsg', 'The Food Review Updated Successfully!');
    }

    public function destroy($id)
    {
        FoodReview::destroy($id);
        return redirect('food-admin/food-reviews')->with('successMsg', 'The Food Review Deleted Successfully!');
    }
}
