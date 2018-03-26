<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;

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
}
