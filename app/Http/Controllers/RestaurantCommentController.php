<?php

namespace App\Http\Controllers;

use App\RestaurantComment;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RestaurantCommentController extends Controller
{
    public function index()
    {
        $restaurant_comments = RestaurantComment::orderBy('id', 'desc')->get();
        return view ('admin.restaurant-comment.index', compact('restaurant_comments'));
    }


    public function create()
    {
       //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        RestaurantComment::destroy($id);
        return redirect('food-admin/restaurant-comments')->with('successMsg', 'The Restaurant Comment Deleted Successfully!');
    }
}
