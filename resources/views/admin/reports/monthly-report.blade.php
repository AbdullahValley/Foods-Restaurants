@extends('admin.layouts.master')

@section('content')
    <div class="box-header">
        <h3 class="box-title">Profit & Loss Report [{{ date('F-Y') }}]</h3>

        @if(session('successMsg'))
            <span class="alert alert-success alert-dismissible" role="alert">
                {{ session('successMsg') }}</span>
        @endif

    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">


        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Profit</h2>
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

                    <table class="table table-bordered">


                        <tr>
                            <td>

                                + 20,000 Taka

                            </td>

                        </tr>



                    </table>

                </div>



            </div>






            <div class="x_panel">
                <div class="x_title">
                    <h2>Loss</h2>
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

                    <table class="table table-bordered">


                        <tr>
                            <td>

                                - 10,000 Taka

                            </td>

                        </tr>



                    </table>

                </div>



            </div>







        </div>


    </div>
@endsection