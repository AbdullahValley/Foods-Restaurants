@extends('admin.layouts.master')

@section('content')
    @if(session('successMsg'))
        <span class="alert alert-success alert-dismissible" role="alert">
            {{ session('successMsg') }}
        </span>
    @endif
    <div class="col-md-4 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Permission</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left" action="{{ is_null($permission) ? action('PermissionController@store') : action('PermissionController@update', $permission->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @if(!is_null($permission))@method('PUT')@endif

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ !is_null($permission) && $permission->name ? $permission->name : old('name') }}">
                            @if($errors->has('name')) <span class="text-danger">{{ $errors->first('name') }}</span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Display Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="displayName" placeholder="Display Name" value="{{ !is_null($permission) && $permission->display_name ? $permission->display_name : old('displayName') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" rows="3" name="description" placeholder="Description">{{ !is_null($permission) && $permission->description ? $permission->description : old('description') }}</textarea>
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">{{ is_null($permission) ? 'Add New Permission' : 'Update Permission' }}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>







    <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Permissions</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Display Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $sl=1;
                        @endphp
                    @foreach($permissions as $permission)

                    <tr>
                        <th scope="row">{{ $sl++ }}</th>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->display_name }}</td>
                        <td>{{ $permission->description }}</td>
                        <td>

                            <a href="{{ action('PermissionController@edit', $permission->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                            <form action="{{ action('PermissionController@destroy', $permission->id) }}" method="post" style="display: inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this permission?')">
                                    <i class="fa fa-trash-o"> Delete</i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection