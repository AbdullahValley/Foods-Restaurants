<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;

class RolepermissionController extends Controller
{
    public function index()
    {
        $roles = Role::orderBY('id')->get();
        $permissions = Permission::orderBY('id')->get();

        return view('admin.role-permission.role-permission-add',compact('roles','permissions'));
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
