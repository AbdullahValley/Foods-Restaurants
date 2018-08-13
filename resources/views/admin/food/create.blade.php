@extends('admin.layouts.master')

@section('content')
     <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Food</h3>
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
                            <h2>Food <small>sub title</small></h2>
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

                            <form action="{{ action('FoodController@store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                                @csrf

                                <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                </p>
                                <span class="section">Food</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="restaurant_name">Restaurant Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="restaurant_name" class="form-control" name="restaurant_id" required>
                                            <option value="">Select Restaurant</option>
                                            @foreach($restaurants as $restaurant)
                                                <option value="{{ $restaurant->id }}">{{ $restaurant->display_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('restaurant_id')) <span class="text-danger">{{ $errors->first('restaurant_id') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Food Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" name="name" type="text">
                                        @if($errors->has('name')) <span class="text-danger">{{ $errors->first('name') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Display Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" name="display_name" required="required" type="text">
                                        @if($errors->has('display_name')) <span class="text-danger">{{ $errors->first('display_name') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Details <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" required="required" name="details" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Pros
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="pros" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Cons
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="cons" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Our Opinion
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="our_opinion" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Types
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="types" class="form-control col-md-7 col-xs-12 flat">
                                        <input type="checkbox" name="types" class="form-control col-md-7 col-xs-12 flat">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Categories
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="categories" class="form-control col-md-7 col-xs-12 flat">
                                        <input type="checkbox" name="categories" class="form-control col-md-7 col-xs-12 flat">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Food Groups
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="food_groups" class="form-control col-md-7 col-xs-12 flat">
                                        <input type="checkbox" name="food_groups" class="form-control col-md-7 col-xs-12 flat">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="same3">Food Court
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="same3" class="form-control" name="food_court">
                                            <option value="">Select Food Court</option>
                                            @foreach($food_courts as $food_court)
                                                <option value="{{ $food_court->id }}">{{ $food_court->display_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('food_court')) <span class="text-danger">{{ $errors->first('food_court') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Competitors
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="competitors" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('competitors')) <span class="text-danger">{{ $errors->first('competitors') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="photo" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('photo')) <span class="text-danger">{{ $errors->first('photo') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Video
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="video" class="form-control col-md-7 col-xs-12" placeholder="Youtube Embed Code or URL"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Ratings
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="rating" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('rating')) <span class="text-danger">{{ $errors->first('rating') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Price
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="price" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('price')) <span class="text-danger">{{ $errors->first('price') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Featured
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="featured" class="form-control col-md-7 col-xs-12 flat">
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