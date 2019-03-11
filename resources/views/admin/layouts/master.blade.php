<!DOCTYPE html>
<html lang="en">

    @include('admin.layouts.head')

<body class="nav-md">
<div class="container body">

    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('/food-admin') }}" class="site_title"><i class="fa fa-empire"></i> <span>Food Valley</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{ asset('uploads/image/'.auth()->user()->photo) }}" alt="Image" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ auth()->user()->username }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            @include('admin.layouts.sidebar')

                </div>
                <!-- /sidebar menu -->

            </div>
        </div>

            <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>

                            @include('admin.layouts.navbar')

                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

            <!-- page content -->
                <div class="right_col" role="main">

                        @yield('content')

                </div>
            <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            &copy; 2018 Abdullah. All Rights Reserved.
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->

</div>
</div>
        @include('admin.layouts.footer')
</body>
</html>