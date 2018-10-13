<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="#">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Cart || Food & Restaurant by Abdullah Al Noman</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/bootstrap.min.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="{{ asset('front-end/css/simple-line-icons.css') }}">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{ asset('front-end/css/themify-icons.css') }}">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="{{ asset('front-end/css/set1.css') }}">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="{{ asset('front-end/css/swiper.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/magnific-popup.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
</head>

<body>
<!--============================= HEADER =============================-->
<div class="dark-bg sticky-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="../">Abdullah Food</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('./') }}">Home</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                            </li>

                            {{--
                                                            <li class="nav-item active">
                                                                <a class="nav-link" href="{{ url('/details') }}">Details</a>
                                                            </li>
                            --}}
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/restaurant-list') }}">All Restaurants</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" target="_blank" href="{{ url('/map') }}">Maps</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                            </li>

                            <li><a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Add Restaurant</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--//END HEADER -->
<!--============================= BOOKING =============================-->
<div>
    <!-- Swiper -->
    <div class="swiper-container">
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</div>
<!--//END BOOKING -->
<!--============================= RESERVE A SEAT =============================-->
<section class="reserve-block">
    <div class="container">

    </div>
</section>
<!--//END RESERVE A SEAT -->
<!--============================= BOOKING DETAILS =============================-->
<section class="light-bg booking-details_wrap">
    <div class="container">
        <div class="row">
            @if(session('successMsg'))
                <span class="alert alert-success alert-dismissible" role="alert">
                            {{ session('successMsg') }}.
                        </span>
            @endif

                <table class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Price</th>
                        {{--<th>Quantity</th>--}}
                        {{--<th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @php($sl=1)

                    @foreach($cart as $cart)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $cart->name }}</td>
                            <td>{{ $cart->price }}</td>
                            {{--<td>{{ $cart->quantity }}</td>--}}
                            {{--<td>--}}

                                {{--<a href="{{ action('FoodNewsController@edit', $food_news->unique_id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>--}}
                                {{--<form action="{{ action('FoodNewsController@destroy', $food_news->unique_id) }}" method="post" style="display: inline">--}}
                                    {{--@csrf--}}
                                    {{--{{ method_field('DELETE') }}--}}
                                    {{--<button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('PERMANENTLY Delete this User. Are you Sure ?')">--}}
                                        {{--<i class="fa fa-trash-o"> Delete</i>--}}
                                    {{--</button>--}}
                                {{--</form>--}}


                            {{--</td>--}}
                        </tr>

                    @endforeach

                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="3" align="center"><b>Total :</b> {{ $amount }} Taka</td>
                    </tr>
                    <tr><td colspan="3" align="center">Make Payment</td></tr>
                    </tfoot>

                </table>
            {{--<div class="col-md-6">
                <form action="" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-4 control-label">Select Restaurant</label>
                        <div class="col-md-8">
                            <select name="customer" class="form-control">
                                <option value="">Choose Restaurant</option>
                                @foreach($restaurants as $restaurant)
                                    <option value="{{ $restaurant->id }}">{{ $restaurant->display_name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Select Food</label>
                        <div class="col-md-8">
                            <select name="country" id="country" class="form-control">
                                <option value="">Choose Food</option>
                                @foreach($foods as $food)
                                    <option value="{{ $food->id }}" >{{ $food->display_name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Show Food Details</label>
                        <div class="col-md-8">

                            <p>Photo : </p> <p>Name : </p> <p>Price : </p> <p>Rating : </p>

                        </div>
                    </div>

                </form>
            </div>--}}

        </div>
    </div>
</section>
<!--//END BOOKING DETAILS -->
<!--============================= FOOTER =============================-->
<footer class="main-block dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">

                    <p>Copyright &copy; 2018 Abdullah-Al-Noman.</p>

                    <ul>
                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                        <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                        <li><a href="#"><span class="ti-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--//END FOOTER -->




<!-- jQuery, Bootstrap JS. -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('front-end/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('front-end/js/popper.min.js') }}"></script>
<script src="{{ asset('front-end/js/bootstrap.min.js') }}"></script>
<!-- Magnific popup JS -->
<script src="{{ asset('front-end/js/jquery.magnific-popup.js') }}"></script>
<!-- Swipper Slider JS -->
<script src="{{ asset('front-end/js/swiper.min.js') }}"></script>

</body>

</html>
