@extends('admin.layouts.master')

@section('content')
     <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Validation</h3>
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
                            <h2>Form validation <small>sub title</small></h2>
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

                            <form action="{{ action('UserController@store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                                @csrf

                                <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                </p>
                                <span class="section">Personal Info</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" name="username" placeholder="Enter Unique Username" required="required" type="text">
                                        @if($errors->has('username')) <span class="text-danger">{{ $errors->first('username') }}</span> @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('email')) <span class="text-danger">{{ $errors->first('email') }}</span> @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Password</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="password" name="password" class="form-control col-md-7 col-xs-12" required="required">
                                        @if($errors->has('password')) <span class="text-danger">{{ $errors->first('password') }}</span> @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('phone')) <span class="text-danger">{{ $errors->first('phone') }}</span> @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Full Address <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" required="required" name="address" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('photo')) <span class="text-danger">{{ $errors->first('photo') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        @php($roles = config('appconfig.roles'))
                                        @foreach($roles as $key => $role)
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $role }}">

                                                 <input type="radio" class="flat" id="{{ $role }}" name="role" value="{{ $key }}" class="form-control col-md-7 col-xs-12" required="required" {{ old('role') == $key ? 'checked' : '' }}> {{ $role }}

                                            </label>
                                        @endforeach
                                        @if($errors->has('role')) <span class="text-danger">{{ $errors->first('role') }}</span> @endif

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