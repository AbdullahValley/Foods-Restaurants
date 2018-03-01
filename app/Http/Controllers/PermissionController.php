<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function index()
    {
        $permission = null;
        $permissions = Permission::orderBY('id', 'desc')->get();

        return view('admin.role-permission.permission', compact('permission','permissions'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions',
        ]);

        $permission                 = new Permission();
        $permission->name           = $request->name;
        $permission->display_name   = $request->displayName;
        $permission->description    = $request->description;

        $permission->save();

        return redirect('food-admin/permissions')->with('successMsg', 'The Permission has been added Successfully!');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $permission = Permission::find($id);
        $permissions = Permission::orderBY('id', 'desc')->get();

        return view('admin.role-permission.permission', compact('permission', 'permissions'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name,'.$id,
        ]);

        $permission                 = Permission::find($id);
        $permission->name           = $request->name;
        $permission->display_name   = $request->displayName;
        $permission->description    = $request->description;

        $permission->save();

        return redirect('food-admin/permissions')->with('successMsg', 'The Permission has been Updated Successfully!');
    }

    public function destroy($id)
    {
        if (is_numeric($id)){
            Permission::destroy($id);
            return redirect('food-admin/permissions')->with('successMsg', 'The Permission has been Deleted Successfully!');
        }
    }
}
