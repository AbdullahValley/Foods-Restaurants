

<div class="nav-menu">
    <div class="bg transition">
        <div class="container-fluid fixed">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="./">Abdullah Food</a>
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

                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/compare') }}">Compare Foods</a>
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

                                <li>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-light top-b" data-toggle="modal" data-target="#exampleModal">
                                        <span class="ti-plus"></span>
                                        Add Restaurant
                                    </button>

                                    {{--<a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Add Restaurant</a>--}}

                                </li>



                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>