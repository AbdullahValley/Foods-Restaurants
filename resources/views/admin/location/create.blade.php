@extends('admin.layouts.master')

@section('content')
     <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Location</h3>
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
                            <h2>Location <small>sub title</small></h2>
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

                            <form action="{{ action('LocationController@store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                                @csrf

                                <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                </p>
                                <span class="section">Location</span>


                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city_name">City Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="city_name" class="form-control" name="city_id" required>
                                            <option value="">Select City</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Madina</option>
                                            <option value="3">Dubai</option>
                                        </select>
                                        @if($errors->has('city_id')) <span class="text-danger">{{ $errors->first('city_id') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Location Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" name="name" required="required" type="text">
                                        @if($errors->has('name')) <span class="text-danger">{{ $errors->first('name') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Display Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="display_name" required="required"  class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('display_name')) <span class="text-danger">{{ $errors->first('display_name') }}</span> @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" required="required" name="details" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Avatar <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="avatar" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('avatar')) <span class="text-danger">{{ $errors->first('avatar') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="active">

                                                <input type="radio" class="flat" id="active" name="status" value="1" class="form-control col-md-7 col-xs-12" required="required" {{ old('status') == 1 ? 'checked' : '' }}> Active

                                            </label>

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inactive">

                                                <input type="radio" class="flat" id="inactive" name="status" value="0" class="form-control col-md-7 col-xs-12" required="required" {{ old('status') == 0 ? 'checked' : '' }}> Inactive

                                            </label>
                                        @if($errors->has('status')) <span class="text-danger">{{ $errors->first('status') }}</span> @endif

                                    </div>
                                </div>



                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection