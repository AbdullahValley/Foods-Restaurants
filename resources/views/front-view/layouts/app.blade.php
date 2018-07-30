<!DOCTYPE html>
<html lang="en">

@include('front-view.layouts.head')

<body>
<!--============================= HEADER =============================-->

@include('front-view.layouts.navbar')

<!-- SLIDER -->
<section class="slider d-flex align-items-center">
    <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="slider-title_box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content_wrap">
                                <h1>Discover restaurants in Dhaka</h1>
                                <h5>Let's uncover the best food to eat, drink, and shop nearest to you.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                            <form class="form-wrap mt-4">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <input type="text" placeholder="What are your looking for?" class="btn-group1">
                                    <input type="text" placeholder="Dhaka" class="btn-group2">
                                    <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                </div>
                            </form>
                            <div class="slider-link">
                                <a href="#">Browse Popular</a><span>or</span> <a href="#">Recently Addred</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// SLIDER -->
<!--//END HEADER -->
<!--============================= FIND PLACES =============================-->
<section class="main-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3>What do you need to find?</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="find-place-img_wrap">
                    <div class="grid">
                        <figure class="effect-ruby">
                            <img src="{{ asset('front-end/images/find-place1.jpg') }}" class="img-fluid" alt="img13" />
                            <figcaption>
                                <h5>Ice Cream </h5>
                                <p>385 Listings</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row find-img-align">
                    <div class="col-md-12">
                        <div class="find-place-img_wrap">
                            <div class="grid">
                                <figure class="effect-ruby">
                                    <img src="{{ asset('front-end/images/find-place2.jpg') }}" class="img-fluid" alt="img13" />
                                    <figcaption>
                                        <h5>Restaurants</h5>
                                        <p>210 Listings</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="find-place-img_wrap">
                            <div class="grid">
                                <figure class="effect-ruby">
                                    <img src="{{ asset('front-end/images/find-place3.jpg') }}" class="img-fluid" alt="img13" />
                                    <figcaption>
                                        <h5>Biryani </h5>
                                        <p>114 Listings</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row find-img-align">
                    <div class="col-md-12">
                        <div class="find-place-img_wrap">
                            <div class="grid">
                                <figure class="effect-ruby">
                                    <img src="{{ asset('front-end/images/find-place4.jpg') }}" class="img-fluid" alt="img13" />
                                    <figcaption>
                                        <h5>Hotels </h5>
                                        <p>577 Listings</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="find-place-img_wrap">
                            <div class="grid">
                                <figure class="effect-ruby">
                                    <img src="{{ asset('front-end/images/find-place5.jpg') }}" class="img-fluid" alt="img13" />
                                    <figcaption>
                                        <h5>Fast Food </h5>
                                        <p>79 Listings</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END FIND PLACES -->
<!--============================= FEATURED PLACES =============================-->
<section class="main-block light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3>Featured Places</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="#">
                        <img src="{{ asset('front-end/images/featured1.jpg') }}" class="img-fluid" alt="#">
                        <span class="featured-rating-orange">6.5</span>
                        <div class="featured-title-box">
                            <h6>Burger & Lobster</h6>
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
            <div class="col-md-4 featured-responsive">
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
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="#">
                        <img src="{{ asset('front-end/images/featured3.jpg') }}" class="img-fluid" alt="#">
                        <span class="featured-rating">3.2</span>
                        <div class="featured-title-box">
                            <h6>Tasty Hand-Pulled Noodles</h6>
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
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="featured-btn-wrap">
                    <a href="#" class="btn btn-danger">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END FEATURED PLACES -->
<!--============================= CATEGORIES =============================-->
<section class="main-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3>Browse Categories</h3>





                </div>
            </div>
        </div>
        <div class="row">

            @foreach($restaurant_categories as $restaurant_category)

                <div class="col-md-3 category-responsive">
                    <a href="{{ url('/restaurant-categories/'.$restaurant_category->unique_id) }}" class="category-wrap">
                        <div class="category-block">
                            <svg class="category-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_3" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px"><g><g>
                                        <g>
                                            <path d="M454.976,43.056c-3.591-3.588-9.411-3.591-13.003,0l-95.329,95.326c-3.592,3.591-3.592,9.411-0.001,13.003    c1.796,1.795,4.148,2.692,6.502,2.692c2.352,0,4.706-0.897,6.502-2.692l95.329-95.326    C458.566,52.467,458.566,46.646,454.976,43.056z" data-original="#000000" class="active-path" data-old_color="#ff3a6d" fill="#ff3a6d"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M480.9,68.571c-3.592-3.589-9.412-3.589-13.003,0l-95.328,95.328c-3.59,3.592-3.59,9.412-0.001,13.003    c1.796,1.795,4.15,2.692,6.502,2.692c2.352,0,4.706-0.897,6.502-2.692L480.9,81.573C484.491,77.982,484.491,72.161,480.9,68.571z" data-original="#000000" class="active-path" data-old_color="#ff3a6d" fill="#ff3a6d"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M390.969,229.548L509.307,111.21c3.591-3.592,3.591-9.412,0-13.003c-3.592-3.588-9.412-3.591-13.003,0L377.968,216.545    c-14.579,14.578-36.871,18.403-55.47,9.521c-3.7-1.766-8.118-0.873-10.839,2.193l-40.209,45.303    c-0.016,0.017-0.034,0.032-0.05,0.05c-0.016,0.018-0.028,0.037-0.044,0.055L97.567,469.464c-0.044,0.05-0.088,0.101-0.131,0.152    c-0.573,0.673-1.114,1.264-1.662,1.813c-11.475,11.474-30.145,11.473-41.615,0c-5.558-5.557-8.619-12.948-8.619-20.808    s3.061-15.25,8.629-20.818c0.534-0.537,1.124-1.076,1.803-1.654c0.052-0.043,0.102-0.087,0.152-0.131l108.648-96.434    c3.798-3.371,4.143-9.182,0.773-12.979c-3.371-3.799-9.183-4.146-12.979-0.773L43.99,414.202    c-1.038,0.885-1.967,1.742-2.833,2.609c-9.031,9.031-14.005,21.038-14.005,33.81c0,12.771,4.973,24.779,14.004,33.81    c9.323,9.321,21.566,13.982,33.812,13.981c12.241,0,24.487-4.659,33.803-13.976c0.883-0.881,1.738-1.811,2.616-2.839    l132.432-149.206l132.434,149.208c0.877,1.029,1.732,1.959,2.609,2.834c9.321,9.321,21.565,13.981,33.809,13.981    c12.245,0,24.49-4.661,33.812-13.982c18.64-18.643,18.64-48.975,0.005-67.613c-0.88-0.883-1.811-1.738-2.838-2.615    l-152.391-135.26l29.815-33.592C345.231,253.911,372.565,247.949,390.969,229.548z M431.514,428.019    c0.05,0.044,0.101,0.088,0.152,0.131c0.673,0.573,1.264,1.114,1.813,1.662c11.473,11.474,11.473,30.143,0.001,41.615    c-11.475,11.473-30.144,11.473-41.622-0.005c-0.543-0.543-1.086-1.135-1.659-1.808c-0.043-0.051-0.087-0.102-0.131-0.152    L256.111,318.54l22.939-25.845L431.514,428.019z" data-original="#000000" class="active-path" data-old_color="#ff3a6d" fill="#ff3a6d"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M427.379,16.278c-3.592-3.589-9.412-3.589-13.003,0L296.04,134.617c-18.406,18.404-24.366,45.735-15.807,69.897    l-36.415,32.322l-34.998-31.064c18.099-35.612,11.492-78.851-17.222-107.566c-28.518-28.518-61.55-48.587-93.011-56.508    c-32.843-8.267-61.001-2.748-79.295,15.545s-23.814,46.455-15.545,79.296c7.922,31.459,27.99,64.491,56.51,93.008    c28.714,28.716,71.952,35.323,107.566,17.223c0,0,34.225,38.558,34.659,39.048c1.817,2.047,4.342,3.09,6.88,3.09    c2.171,0,4.349-0.764,6.1-2.318l81.866-72.664c3.065-2.721,3.958-7.141,2.193-10.839c-8.884-18.601-5.058-40.891,9.521-55.468    L427.379,29.281C430.97,25.689,430.97,19.869,427.379,16.278z M210.131,266.737l-33.468-37.706    c-2.964-3.339-7.902-4.069-11.702-1.722c-29.478,18.177-67.188,13.754-91.704-10.763c-26.204-26.203-44.557-56.21-51.68-84.497    c-6.625-26.317-2.819-48.267,10.718-61.803C45.83,56.708,67.78,52.904,94.096,59.53c28.287,7.122,58.296,25.474,84.498,51.678    c24.516,24.515,28.94,62.225,10.762,91.703c-2.344,3.801-1.617,8.737,1.722,11.702l38.888,34.516L210.131,266.737z" data-original="#000000" class="active-path" data-old_color="#ff3a6d" fill="#ff3a6d"/>
                                        </g>
                                    </g></g> </svg>
                            <h6>{{ $restaurant_category->display_name }}</h6>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>

    </div>
</section>
<!--//END CATEGORIES -->
<!--============================= ADD RESTAURANT =============================-->
<section class="main-block light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="add-listing-wrap">
                    <h2>Reach millions of People</h2>
                    <p>Add your Business in front of millions and earn 3x profits from our website</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="featured-btn-wrap">
                    <a href="#" class="btn btn-danger"><span class="ti-plus"></span> ADD RESTAURANT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END ADD RESTAURANT -->

@include('front-view.layouts.footer')

</body>

</html>