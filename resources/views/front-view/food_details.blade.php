@php

    $timezone  = +6;
    $my_time = gmdate("H:i:s", time() + 3600*($timezone+date("I")));

@endphp


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
    <title>{{ $foods->display_name }} || Food & Restaurant by Abdullah Al Noman</title>
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
                    <a class="navbar-brand" href="../">Food Valley</a>
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
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ $foods->photo ? asset('uploads/image/'.$foods->photo) : asset('uploads/image/default-restaurant.png') }}" class="grid image-link">
                    <img src="{{ $foods->photo ? asset('uploads/image/'.$foods->photo) : asset('uploads/image/default-restaurant.png') }}" class="img-fluid" alt="#">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="{{ $foods->photo ? asset('uploads/image/'.$foods->photo) : asset('uploads/image/default-restaurant.png') }}" class="grid image-link">
                    <img src="{{ $foods->photo ? asset('uploads/image/'.$foods->photo) : asset('uploads/image/default-restaurant.png') }}" class="img-fluid" alt="#">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="{{ $foods->photo ? asset('uploads/image/'.$foods->photo) : asset('uploads/image/default-restaurant.png') }}" class="grid image-link">
                    <img src="{{ $foods->photo ? asset('uploads/image/'.$foods->photo) : asset('uploads/image/default-restaurant.png') }}" class="img-fluid" alt="#">
                </a>
            </div>

            {{--            <div class="swiper-slide">
                            <a href="{{ asset('front-end/images/reserve-slide1.jpg') }}" class="grid image-link">
                                <img src="{{ asset('front-end/images/reserve-slide1.jpg') }}" class="img-fluid" alt="#">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ asset('front-end/images/reserve-slide3.jpg') }}" class="grid image-link">
                                <img src="{{ asset('front-end/images/reserve-slide3.jpg') }}" class="img-fluid" alt="#">
                            </a>
                        </div>
            --}}

            {{--<div class="swiper-slide">
                <a href="{{ asset('front-end/images/reserve-slide1.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front-end/images/reserve-slide1.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('front-end/images/reserve-slide2.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front-end/images/reserve-slide2.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('front-end/images/reserve-slide3.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front-end/images/reserve-slide3.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>--}}
        </div>
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
        <div class="row">
            <div class="col-md-6">
                <h5>{{ $foods->display_name }}</h5>
                <p><span>$ </span> {{ $foods->price }}</p>
                <p class="reserve-description">Innovative cooking, fresh and good for health condition fresh and good.</p>
            </div>
            <div class="col-md-6">
                <div class="reserve-seat-block">
                    <div class="reserve-rating">
                        <span>{{ $foods->rating }}</span>
                    </div>
                    <div class="review-btn">
                        <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a>
                        <span>0 reviews</span>
                    </div>
                    <div class="reserve-btn">
                        <form action="{{ action('CartController@store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $foods->unique_id }}">
                            <input type="hidden" name="checkout_id" value="{{ $foods->checkout_id }}">
                            <input type="hidden" name="name" value="{{ $foods->display_name }}">
                            <input type="hidden" name="price" value="{{ $foods->price }}">
                            <input type="hidden" name="commission_rate" value="{{ $foods->commission_rate }}">
                        <div class="featured-btn-wrap">


                            @foreach($restaurant_info as $restaurant_time)

                                @php
                                    if ($my_time>=$restaurant_time->open && $my_time<=$restaurant_time->close)
                                        echo "<button type='submit' class='btn btn-danger'>ADD TO CART</button>";
                                    else
                                        echo "<button type='submit' class='btn btn-danger' disabled>ADD TO CART</button>";
                                @endphp

                            @endforeach


                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END RESERVE A SEAT -->
<!--============================= BOOKING DETAILS =============================-->
<section class="light-bg booking-details_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8 responsive-wrap">
                <div class="booking-checkbox_wrap">
                    <div class="booking-checkbox">

                        {{--<marquee onMouseOut=this.start(); onMouseOver=this.stop(); scrollamount='2' scrolldelay='30'
                                 truespeed="truespeed">


                            <a href="#">
                                <img src="{{ asset('front-end/images/featured1.jpg') }}" width="200px" height="200px"
                                     class="img-fluid" alt="#">
                                Kabab
                                <span>$</span> 290

                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/images/featured2.jpg') }}" width="200px" height="200px"
                                     class="img-fluid" alt="#">
                                Pasta
                                <span>$</span> 490

                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/images/featured3.jpg') }}" width="200px" height="200px"
                                     class="img-fluid" alt="#">
                                Burger
                                <span>$</span> 300

                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/images/featured4.jpg') }}" width="200px" height="200px"
                                     class="img-fluid" alt="#">
                                Pizza
                                <span>$</span> 100

                            </a>

                        </marquee>--}}

                        <br><br>
                        <p>{{ $foods->details }}

                        <p>Restaurant Name :

                        @foreach($restaurant_info as $restaurant_name)

                                {{ $restaurant_name->display_name }}

                        @endforeach

                         </p>

                        <p>Restaurant Open & Close Time :

                        @foreach($restaurant_info as $restaurant_time)

{{ date('l') }} - {{ date("h:i A", strtotime($restaurant_time->open)) }} - {{ date("h:i A", strtotime($restaurant_time->close)) }}

                         </p>



            @php

                        if ($my_time>=$restaurant_time->open && $my_time<=$restaurant_time->close)
                            echo "<span class='open-now'>OPEN NOW</span><br><br>You Can Order Now this food.";
                        else
                            echo "<span class='closed-now'>CLOSED NOW</span><br><br>Now You Can NOT Order this food.";
            @endphp

                        @endforeach


                        <hr>
                    </div>
                    {{--<div class="row">
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Bike Parking</span>
                            </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Wireless Internet  </span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Smoking Allowed  </span>
                            </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Street Parking</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Special</span>
                            </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                                <span class="ti-check-box"></span>
                                <span class="custom-control-description">Accepts Credit cards</span>
                            </label>
                        </div>
                    </div>--}}
                </div>

                {{-- User Reviews Commented --}}

                {{--<div class="booking-checkbox_wrap mt-4">
                    <h5>2 Reviews</h5>
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="{{ asset('front-end/images/customer-img1.jpg') }}" class="img-fluid" alt="#">
                            <p>TM Nabil</p>
                            <span>35 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>Best noodles in the Dhaka city</h6>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span class="round-icon-blank"></span>
                                    <p>Reviewed 2 days ago</p>
                                </div>
                                <div class="customer-rating">8.0</div>
                            </div>
                            <p class="customer-text">I love how you can see into the kitchen and watch them make the noodles and you can definitely tell that this is a family run establishment. The prices are are great with one dish maybe being $9. You just have to remember
                                to bring cash.
                            </p>
                            <ul>
                                <li><img src="{{ asset('front-end/images/review-img1.jpg') }}" class="img-fluid" alt="#"></li>
                                <li><img src="{{ asset('front-end/images/review-img2.jpg') }}" class="img-fluid" alt="#"></li>
                                <li><img src="{{ asset('front-end/images/review-img3.jpg') }}" class="img-fluid" alt="#"></li>
                            </ul>
                            <span>28 people marked this review as helpful</span>
                            <a href="#"><span class="icon-like"></span>Helpful</a>
                        </div>
                    </div>
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="{{ asset('front-end/images/customer-img2.jpg') }}" class="img-fluid" alt="#">
                            <p>Maruf</p>
                            <span>17 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>Not a good at all.</h6>
                                    <span class="customer-rating-red"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <p>Reviewed 3 months ago</p>
                                </div>
                                <div class="customer-rating customer-rating-red">2.0</div>
                            </div>
                            <p class="customer-text">The dumplings were so greasy...the pan-fried shrimp noodles were the same. So much oil and grease it was difficult to eat. The shrimp noodles only come with 3 shrimp (luckily the dish itself is cheap) </p>

                            <span>10 people marked this review as helpful</span>
                            <a href="#"><span class="icon-like"></span>Helpful</a>
                        </div>
                    </div>
                </div>--}}
            </div>
            <div class="col-md-4 responsive-wrap">
                {{--<div class="contact-info">
                    <img src="{{ asset('front-end/images/map.jpg') }}" class="img-fluid" alt="#">
                    <div class="address">
                        <span class="icon-location-pin"></span>
                        <p>{{ $get_sub_location_name[0] }}<br> {{ $get_location_name[0] }}<br> {{ $get_food_court_name[0] }} <br> {{ $get_city_name[0] }}</p>
                    </div>
                    <div class="address">
                        <span class="icon-screen-smartphone"></span>
                        <p> +88 017 31 21 11 41</p>
                    </div>
                    <div class="address">
                        <span class="icon-link"></span>
                        <p>http://abdullah-food.com</p>
                    </div>
                    <div class="address">
                        <span class="icon-clock"></span>
                        <p>Mon - Sun 09:30 am - 05:30 pm <br>
                            <span class="open-now">OPEN NOW</span></p>
                    </div>
                    <a href="#" class="btn btn-outline-danger btn-contact">SEND A MESSAGE</a>
                </div>--}}

                {{-- User Info Commented --}}

                {{--<div class="follow">
                    <div class="follow-img">
                        <img src="{{ asset('front-end/images/follow-img.jpg') }}" class="img-fluid" alt="#">
                        <h6>Abdullah</h6>
                        <span>Dhaka</span>
                    </div>
                    <ul class="social-counts">
                        <li>
                            <h6>05</h6>
                            <span>Listings</span>
                        </li>
                        <li>
                            <h6>10</h6>
                            <span>Followers</span>
                        </li>
                        <li>
                            <h6>12</h6>
                            <span>Fans</span>
                        </li>
                    </ul>
                    <a href="#">FOLLOW</a>
                </div>--}}
            </div>
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
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script>
    if ($('.image-link').length) {
        $('.image-link').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
    if ($('.image-link2').length) {
        $('.image-link2').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
</script>
</body>

</html>
