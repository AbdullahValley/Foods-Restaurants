<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Food;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();

        return view('admin.reports.all-orders', compact('orders'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $order = new Order();

        $order->user_id          = Auth::id();
        $order->checkout_id      = $request->session()->get('_token');
        $order->mobile           = $request->mobile;
        $order->address          = $request->address;
        $order->total            = $request->total;
        $order->commission       = $request->commission;
        $order->status           = 1;

        $order->save();

        Cart::where('checkout_id', $request->session()->get('_token'))->update(['status' => 2]);

        return redirect('/cart')->with('successMsg', 'Your Order Placed Successfully !');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if($request->status == 2)
        {
            $order->status  = 2;

            $order->save();

            return redirect('food-admin/orders')->with('successMsg', 'The Order Delivered Successfully!');
        }

        elseif ($request->status == 3)
        {
            $order->status  = 3;

            $order->save();

            return redirect('food-admin/orders')->with('successMsg', 'The Order Canceled Successfully!');
        }

        else
        {
            $order->status  = 1;

            $order->save();

            return redirect('food-admin/orders')->with('successMsg', 'The Order Updated Successfully!');
        }


    }


    public function destroy($id)
    {
        Order::destroy($id);
        return redirect('food-admin/orders')->with('successMsg', 'The Order Deleted Successfully!');
    }

}
