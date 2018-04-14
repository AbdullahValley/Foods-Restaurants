<?php

namespace App\Http\Controllers;

use App\FoodComment;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FoodCommentController extends Controller
{
    public function index()
    {
        $food_comments = FoodComment::orderBy('id', 'desc')->get();
        return view ('admin.food-comment.index', compact('food_comments'));
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
        FoodComment::destroy($id);
        return redirect('food-admin/food-comments')->with('successMsg', 'The Restaurant Comment Deleted Successfully!');
    }
}
