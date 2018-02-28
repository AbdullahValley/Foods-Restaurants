<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->where('status','1')->get();
        return view ('admin.user.index', compact('users'));
    }


    public function recycle()
    {
        $users = User::orderBy('id', 'desc')->where('status','0')->get();
        return view ('admin.user.recycle', compact('users'));
    }



    public function temp_delete(Request $request)
    {
        $user           =    User::find($request->id);

        $user->status   =    $request->status;

        $user->save();

        return redirect('food-admin/users')->with('successMsg', 'The User Deleted Successfully!');
    }


    public function restore(Request $request)
    {
        $user           =    User::find($request->id);

        $user->status   =    $request->status;

        $user->save();

        return redirect('food-admin/recycle')->with('successMsg', 'The User Restored Successfully!');
    }


    public function create()
    {
        return view ('admin.user.create');
    }


    public function store(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'username'  => 'required|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
            'phone'     => 'required|unique:users',
            'photo'     => 'mimes:jpeg,png',
            'role'      => 'required'
        ]);

        $user = new User();

        $user->username = $request->username;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone    = $request->phone;
        $user->address  = $request->address;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image) {
                $user->photo = $file->getClientOriginalName();
            }
        }

        $user->member_id = Auth::id();
        $user->role     = $request->role;
        $user->status   = $request->status;

        $user->save();

        return redirect('food-admin/users')->with('successMsg', 'The User Inserted Successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view ('admin.user.edit',compact('user'));
    }


    public function update(Request $request, $id)
    {
        //dd($request);

        $this->validate($request, [
            'username'  => 'required|unique:users,username,'.$id,
            'email'     => 'required|email|unique:users,email,'.$id,
            'phone'     => 'required|unique:users,phone,'.$id,
            'photo'     => 'mimes:jpeg,png',
            'role'      => 'required'
        ]);

        $user           = User::find($id);

        $user->username = $request->username;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->address    = $request->address;

        if ($request->hasFile('photo'))
        {
            $file = $request->photo;
            $image = Image::make($file)->resize(200, null, function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image){
                $user->photo   = $file->getClientOriginalName();
            }
        }

        $user->role     = $request->role;
        $user->status   = $request->status;

        $user->save();

        return redirect('food-admin/users')->with('successMsg', 'The User Updated Successfully!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('food-admin/recycle')->with('successMsg', 'The User Permanently Deleted Successfully!');
    }
}
