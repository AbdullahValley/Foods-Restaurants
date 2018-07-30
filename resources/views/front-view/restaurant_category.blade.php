<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Food & Restaurant by Abdullah Al Noman</title>
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
                                <a class="nav-link" href="{{ url('/restaurants') }}">All Restaurants</a>
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
<!--============================= DETAIL =============================-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 responsive-wrap">
                <div class="row detail-filter-wrap">
                    <div class="col-md-4 featured-responsive">
                        <div class="detail-filter-text">
                            <p>14 Results For <span>{{ $restaurant_category->display_name }}</span></p>
                        </div>
                    </div>
                    <div class="col-md-8 featured-responsive">
                        <div class="detail-filter">
                            <p>Filter by</p>
                            <form class="filter-dropdown">
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                    <option selected>Best Match</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </form>
                            <form class="filter-dropdown">
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect1">
                                    <option selected>Restaurants</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </form>
                            <div class="map-responsive-wrap">
                                <a class="map-icon" href="#"><span class="icon-location-pin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row detail-checkbox-wrap">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Bike Parking</span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Wireless Internet  </span>
                        </label>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Smoking Allowed  </span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Street Parking</span>
                        </label>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Special</span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Accepts Credit cards</span>
                        </label>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Pets Friendly</span>
                        </label>

                    </div>
                </div>
                <div class="row light-bg detail-options-wrap">
                    <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/images/featured1.jpg') }}" class="img-fluid" alt="#">
                                <span class="featured-rating-orange ">6.5</span>
                                <div class="featured-title-box">
                                    <h6>Burger &amp; Lobster</h6>
                                    <p>Restaurant </p> <span>• </span>
                                    <p>3 Reviews</p> <span> • </span>
                                    <p><span>$$$</span>$$</p>
                                    <ul>
                                        <li><span class="icon-location-pin"></span>
                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                        </li>
                                        <li><span class="icon-screen-smartphone"></span>
                                            <p>+44 20 7336 8898</p>
                                        </li>
                                        <li><span class="icon-link"></span>
                                            <p>https://burgerandlobster.com</p>
                                        </li>

                                    </ul>
                                    <div class="bottom-icons">
                                        <div class="closed-now">CLOSED NOW</div>
                                        <span class="ti-heart"></span>
                                        <span class="ti-bookmark"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/images/featured2.jpg') }}" class="img-fluid" alt="#">
                                <span class="featured-rating-green">9.5</span>
                                <div class="featured-title-box">
                                    <h6>Joe’s Shanghai</h6>
                                    <p>Restaurant </p> <span>• </span>
                                    <p>3 Reviews</p> <span> • </span>
                                    <p><span>$$$</span>$$</p>
                                    <ul>
                                        <li><span class="icon-location-pin"></span>
                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                        </li>
                                        <li><span class="icon-screen-smartphone"></span>
                                            <p>+44 20 7336 8898</p>
                                        </li>
                                        <li><span class="icon-link"></span>
                                            <p>https://burgerandlobster.com</p>
                                        </li>

                                    </ul>
                                    <div class="bottom-icons">
                                        <div class="open-now">OPEN NOW</div>
                                        <span class="ti-heart"></span>
                                        <span class="ti-bookmark"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/images/featured3.jpg') }}" class="img-fluid" alt="#">
                                <span class="featured-rating">3.2</span>
                                <div class="featured-title-box">
                                    <h6>KFC Mirpur Dhaka</h6>
                                    <p>Restaurant </p> <span>• </span>
                                    <p>3 Reviews</p> <span> • </span>
                                    <p><span>$$$</span>$$</p>
                                    <ul>
                                        <li><span class="icon-location-pin"></span>
                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                        </li>
                                        <li><span class="icon-screen-smartphone"></span>
                                            <p>+44 20 7336 8898</p>
                                        </li>
                                        <li><span class="icon-link"></span>
                                            <p>https://dhakarestaurant.com</p>
                                        </li>

                                    </ul>
                                    <div class="bottom-icons">
                                        <div class="closed-now">CLOSED NOW</div>
                                        <span class="ti-heart"></span>
                                        <span class="ti-bookmark"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/images/featured4.jpg') }}" class="img-fluid" alt="#">
                                <span class="featured-rating-green">9.5</span>
                                <div class="featured-title-box">
                                    <h6>Pizza - Cicis</h6>
                                    <p>Restaurant </p> <span>• </span>
                                    <p>3 Reviews</p> <span> • </span>
                                    <p><span>$$$</span>$$</p>
                                    <ul>
                                        <li><span class="icon-location-pin"></span>
                                            <p>1301 Avenue, Brooklyn, NY 11230</p>
                                        </li>
                                        <li><span class="icon-screen-smartphone"></span>
                                            <p>+44 20 7336 8898</p>
                                        </li>
                                        <li><span class="icon-link"></span>
                                            <p>https://burgerandlobster.com</p>
                                        </li>

                                    </ul>
                                    <div class="bottom-icons">
                                        <div class="closed-now">CLOSED NOW</div>
                                        <span class="ti-heart"></span>
                                        <span class="ti-bookmark"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 responsive-wrap map-wrap">
                <div class="map-fix">
                    <!-- data-toggle="affix" -->
                    <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                    <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END DETAIL -->
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
                        <li><a href="#"><span class="ti-youtube"></span></a></li>
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


</body>

</html>