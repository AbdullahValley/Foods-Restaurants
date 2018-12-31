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
    <title>Compare Results || Food & Restaurant by Abdullah Al Noman</title>
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
                    <a class="navbar-brand" href="../">Foods Valley</a>
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

                            <li class="dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">Compare</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/food-compare') }}">Compare Foods</a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/restaurant-compare') }}">Compare Restaurants</a>
                                    </li>
                                </ul>
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



            @if(Route::current()->getName() == 'food-compare-view')

            <div class="row">


                <div class="col-md-4">

                    <div class="form-group" align="center">
                        <label class="col-md-4 control-label">Food #1</label>
                        <div class="col-md-8">




                            @foreach($food_1 as $food)

                            <img src="{{ $food->photo ? asset(config('appconfig.imagePath') . $food->photo) : asset('image/avatar.png') }}" alt="Product Photo" width="200px;">

                            <b>Food Name</b> : {{ $food->name }} <br>
                            <b>Restaurant Name</b> : {{ $food->restaurant_id }} <br>
                            <b>Title</b> : {{ $food->display_name }} <br>
                            <b>Details</b> : {{ $food->details }} <br>
                            <b>Price</b> : {{ $food->price }} <br>

                            <b>Ratings</b> :<br>
                                @php
                                    if($food->rating >7)
                                        $rating_color = "featured-rating-green";

                                    elseif ($food->rating >5  && $food->rating <7)
                                        $rating_color = "featured-rating-orange";
                                    else
                                        $rating_color = "featured-rating";
                                @endphp

                                <span class="{{ $rating_color }}">{{ $food->rating }}</span>

                            @endforeach




                        </div>
                    </div>



                </div>




                <div class="col-md-4">

                    <div class="form-group" align="center">
                        <label class="col-md-4 control-label">Food #2</label>
                        <div class="col-md-8">



                            @foreach($food_2 as $food)

                                <img src="{{ $food->photo ? asset(config('appconfig.imagePath') . $food->photo) : asset('image/avatar.png') }}" alt="Product Photo" width="200px;">

                                <b>Food Name</b> : {{ $food->name }} <br>
                                <b>Restaurant Name</b> : {{ $food->restaurant_id }} <br>
                                <b>Title</b> : {{ $food->display_name }} <br>
                                <b>Details</b> : {{ $food->details }} <br>
                                <b>Price</b> : {{ $food->price }} <br>

                                <b>Ratings</b> :<br>
                                @php
                                    if($food->rating >7)
                                        $rating_color = "featured-rating-green";

                                    elseif ($food->rating >5  && $food->rating <7)
                                        $rating_color = "featured-rating-orange";
                                    else
                                        $rating_color = "featured-rating";
                                @endphp

                                <span class="{{ $rating_color }}">{{ $food->rating }}</span>

                            @endforeach




                        </div>
                    </div>



                    <center>
                        <br><br>
                        <div class="review-btn">

                            <a href="{{ url('/food-compare') }}" class="btn btn-outline-danger">Compare Again</a>

                        </div>
                    </center>


                </div>





                <div class="col-md-4">


                    <div class="form-group" align="center">
                        <label class="col-md-4 control-label">Food #3</label>
                        <div class="col-md-8">



                            @foreach($food_3 as $food)

                                <img src="{{ $food->photo ? asset(config('appconfig.imagePath') . $food->photo) : asset('image/avatar.png') }}" alt="Product Photo" width="200px;">

                                <b>Food Name</b> : {{ $food->name }} <br>
                                <b>Restaurant Name</b> : {{ $food->restaurant_id }} <br>
                                <b>Title</b> : {{ $food->display_name }} <br>
                                <b>Details</b> : {{ $food->details }} <br>
                                <b>Price</b> : {{ $food->price }} <br>

                                <b>Ratings</b> :<br>
                                @php
                                    if($food->rating >7)
                                        $rating_color = "featured-rating-green";

                                    elseif ($food->rating >5  && $food->rating <7)
                                        $rating_color = "featured-rating-orange";
                                    else
                                        $rating_color = "featured-rating";
                                @endphp

                                <span class="{{ $rating_color }}">{{ $food->rating }}</span>



                            @endforeach




                        </div>
                    </div>

                </div>




            </div>

        @endif



        @if(Route::current()->getName() == 'restaurant-compare-view')

        <div class="row">

            <div class="col-md-4">

                <div class="form-group" align="center">
                    <label class="col-md-4 control-label">Restaurant #1</label>
                    <div class="col-md-8">




                        @foreach($restaurant_1 as $restaurant)

                            <img src="{{ $restaurant->photo ? asset(config('appconfig.imagePath') . $restaurant->photo) : asset('image/avatar.png') }}" alt="Product Photo" width="200px;">

                            <b>Restaurant Name</b> : {{ $restaurant->name }} <br>
                            <b>Title</b> : {{ $restaurant->display_name }} <br>
                            <b>Details</b> : {{ $restaurant->details }} <br><br>

                            <b>Ratings</b> :<br>
                            @php
                                if($restaurant->rating >7)
                                    $rating_color = "featured-rating-green";

                                elseif ($restaurant->rating >5  && $restaurant->rating <7)
                                    $rating_color = "featured-rating-orange";
                                else
                                    $rating_color = "featured-rating";
                            @endphp

                            <span class="{{ $rating_color }}">{{ $restaurant->rating }}</span>

                        @endforeach




                    </div>
                </div>



            </div>




            <div class="col-md-4">

                <div class="form-group" align="center">
                    <label class="col-md-4 control-label">Restaurant #2</label>
                    <div class="col-md-8">



                        @foreach($restaurant_2 as $restaurant)

                            <img src="{{ $restaurant->photo ? asset(config('appconfig.imagePath') . $restaurant->photo) : asset('image/avatar.png') }}" alt="Product Photo" width="200px;">

                            <b>Restaurant Name</b> : {{ $restaurant->name }} <br>
                            <b>Title</b> : {{ $restaurant->display_name }} <br>
                            <b>Details</b> : {{ $restaurant->details }} <br><br>

                            <b>Ratings</b> :<br>
                            @php
                                if($restaurant->rating >7)
                                    $rating_color = "featured-rating-green";

                                elseif ($restaurant->rating >5  && $restaurant->rating <7)
                                    $rating_color = "featured-rating-orange";
                                else
                                    $rating_color = "featured-rating";
                            @endphp

                            <span class="{{ $rating_color }}">{{ $restaurant->rating }}</span>

                        @endforeach




                    </div>
                </div>



                <center>
                    <br><br>
                    <div class="review-btn">

                        <a href="{{ url('/restaurant-compare') }}" class="btn btn-outline-danger">Compare Again</a>

                    </div>
                </center>


            </div>





            <div class="col-md-4">


                <div class="form-group" align="center">
                    <label class="col-md-4 control-label">Restaurant #3</label>
                    <div class="col-md-8">



                        @foreach($restaurant_3 as $restaurant)

                            <img src="{{ $restaurant->photo ? asset(config('appconfig.imagePath') . $restaurant->photo) : asset('image/avatar.png') }}" alt="Product Photo" width="200px;">

                            <b>Restaurant Name</b> : {{ $restaurant->name }} <br>
                            <b>Title</b> : {{ $restaurant->display_name }} <br>
                            <b>Details</b> : {{ $restaurant->details }} <br><br>

                            <b>Ratings</b> :<br>
                            @php
                                if($restaurant->rating >7)
                                    $rating_color = "featured-rating-green";

                                elseif ($restaurant->rating >5  && $restaurant->rating <7)
                                    $rating_color = "featured-rating-orange";
                                else
                                    $rating_color = "featured-rating";
                            @endphp

                            <span class="{{ $rating_color }}">{{ $restaurant->rating }}</span>



                        @endforeach




                    </div>
                </div>

            </div>




        </div>
        
        @endif
        
        
        
        




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

