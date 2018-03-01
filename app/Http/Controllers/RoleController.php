<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $role = null;
        $roles = Role::orderBY('id', 'desc')->get();

        return view('admin.role-permission.role', compact('role','roles'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles',
        ]);

        $role                 = new Role();
        $role->name           = $request->name;
        $role->display_name   = $request->displayName;
        $role->description    = $request->description;

        $role->save();

        return redirect('food-admin/roles')->with('successMsg', 'The Role has been Added Successfully!');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $role = Role::find($id);
        $roles = Role::orderBY('id', 'desc')->get();

        return view('admin.role-permission.role', compact('role', 'roles'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name,'.$id,
        ]);

        $role                 = Role::find($id);
        $role->name           = $request->name;
        $role->display_name   = $request->displayName;
        $role->description    = $request->description;

        $role->save();

        return redirect('food-admin/roles')->with('successMsg', 'The Role has been Updated Successfully!');
    }

    public function destroy($id)
    {
        if (is_numeric($id)){
            Role::destroy($id);
            return redirect('food-admin/roles')->with('successMsg', 'The Role has been Deleted Successfully!');
        }
    }
}
