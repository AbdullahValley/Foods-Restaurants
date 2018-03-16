<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;

class RolepermissionController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::with('roles')->get();

        if (request()->permissionRole){
            foreach (request()->permissionRole as $k => $pr){
                $role = Role::find($k);
                $role->syncPermissions($pr);
            }

            return redirect('/food-admin/role-permission')->with('successMsg', 'The Role & Permission have been updated');
        }

        return view('admin.role-permission.role-permission-add',compact('roles','permissions', 'permissionRoles'));
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
        //
    }
}
