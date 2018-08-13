@extends('admin.layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Food <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Food <small>Users</small></h2>
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
                        <p class="text-muted font-13 m-b-30">
                            @if(session('successMsg'))
                                <span class="alert alert-success alert-dismissible" role="alert">
                            {{ session('successMsg') }}.
                        </span>
                            @endif
                        </p>

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Food Name</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Price</th>
                                <th>Restaurant Name</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sl=1)

                            @foreach($foods as $food)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $food->name }}</td>
                                    <td>{{ $food->display_name }}</td>
                                    <td>{{ $food->details }}</td>
                                    <td>{{ $food->price }}</td>
                                    <td>{{ $food->restaurant_id }}</td>
                                    <td>

                                        <img src="{{ $food->photo ? asset(config('appconfig.imagePath') . $food->photo) : asset('image/avatar.png') }}" alt="Review Image" width="80px;">

                                    </td>

                                    <td>{{ $food->status ? "Active" : "Inactive" }}</td>
                                    <td>



                                        <a href="{{ action('FoodController@edit', $food->unique_id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                        <form action="{{ action('FoodController@destroy', $food->unique_id) }}" method="post" style="display: inline">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('PERMANENTLY Delete this Food. Are you Sure ?')">
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

        </div>
    </div>
@endsection