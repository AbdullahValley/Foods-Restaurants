@extends('admin.layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Restaurant Tips</h3>
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
                        <h2>Restaurant Tips
                            <small>sub title</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                        <form action="{{ action('RestaurantTipsController@update', $restaurant_tips->unique_id)  }}"
                              method="post" enctype="multipart/form-data" class="form-horizontal form-label-left"
                              novalidate>
                            @csrf
                            @method('PUT')

                            <p>For alternative validation library <code>parsleyJS</code> check out in the <a
                                        href="form.html">form page</a>
                            </p>
                            <span class="section">Restaurant Tips</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tips Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" value="{{ $restaurant_tips->title }}" class="form-control col-md-7 col-xs-12" name="title" required="required" type="text">
                                    @if($errors->has('title')) <span class="text-danger">{{ $errors->first('title') }}</span> @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Tips Slug <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="slug" value="{{ $restaurant_tips->slug }}" required="required"  class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('slug')) <span class="text-danger">{{ $errors->first('slug') }}</span> @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" required="required" name="description" class="form-control col-md-7 col-xs-12">{{ $restaurant_tips->description }}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo <span
                                            class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <img src="{{ $restaurant_tips->photo ? asset(config('appconfig.imagePath') . $restaurant_tips->photo) : asset('image/avatar.png') }}"
                                         alt="Tips Image" width="80px;">

                                    <br><br>

                                    <input type="file" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('photo')) <span
                                            class="text-danger">{{ $errors->first('photo') }}</span> @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Video
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" name="video" class="form-control col-md-7 col-xs-12" placeholder="Youtube Embed Code or URL">{{ $restaurant_tips->video }}</textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Featured
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="checkbox" name="featured" class="form-control col-md-7 col-xs-12 flat" {{ $restaurant_tips->featured == 1 ? 'checked' : '' }}>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="active">

                                        <input type="radio" class="flat" id="active" name="status" value="1"
                                               class="form-control col-md-7 col-xs-12"
                                               required="required" {{ $restaurant_tips->status == 1 ? 'checked' : '' }}>
                                        Active

                                    </label>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inactive">

                                        <input type="radio" class="flat" id="inactive" name="status" value="0"
                                               class="form-control col-md-7 col-xs-12"
                                               required="required" {{ $restaurant_tips->status == 0 ? 'checked' : '' }}>
                                        Inactive

                                    </label>
                                    @if($errors->has('status')) <span
                                            class="text-danger">{{ $errors->first('status') }}</span> @endif

                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection