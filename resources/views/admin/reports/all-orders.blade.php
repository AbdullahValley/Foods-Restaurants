@extends('admin.layouts.master')

@section('content')
    <div class="box-header">
        <h3 class="box-title">All Order Report</h3>

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
                    <h2>Orders</h2>
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
                        <thead>
                        <tr>
                            <td align="center"><b>Order #</b></td>
                            <td align="center"><b>Mobile</b></td>
                            <td align="center"><b>Address</b></td>
                            <td align="center"><b>Total</b></td>
                            <td align="center"><b>Date</b></td>
                            <td align="center"><b>Status</b></td>
                            <td align="center"><b>Action</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td align="center">{{ $order->id }}</td>
                                <td align="center">{{ $order->mobile }}</td>
                                <td align="center">{{ $order->address }}</td>
                                <td align="center">{{ $order->total }}</td>
                                <td align="center">{{ $order->created_at }}</td>
                                <td align="center">

                                    @if($order->status == 1)
                                        {{ 'Pending' }}
                                    @endif

                                    @if($order->status == 2)
                                        {{ 'Delivered' }}
                                    @endif

                                    @if($order->status == 3)
                                        {{ 'Canceled' }}
                                    @endif

                                </td>
                                <td align="center">


                            <form action="{{ action('OrderController@update', $order->id) }}" method="post" style="display: inline">
                                @csrf
                                {{ method_field('PUT') }}

                                <select name="status">
                                    <option value="">Select Option</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Delivered</option>
                                    <option value="3">Canceled</option>
                                </select>

                                <button type="submit" class="btn btn-info btn-xs" onclick="return confirm('Are you Sure ?')">
                                    <i class="fa fa-edit"> Submit</i>
                                </button>
                            </form>

                            <form action="{{ action('OrderController@destroy', $order->id) }}" method="post" style="display: inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('PERMANENTLY Delete this Order. Are you Sure ?')">
                                    <i class="fa fa-trash-o"> Delete</i>
                                </button>
                            </form>


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>
@endsection