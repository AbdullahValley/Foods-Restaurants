<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view('front-view.order');
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
        $order->mobile          = $request->mobile;
        $order->address          = $request->address;
        $order->total            = $request->total;
        $order->status           = 1;

        $order->save();

        Cart::where('checkout_id', $request->session()->get('_token'))->update(['status' => 2]);

        return redirect('/order')->with('successMsg', 'Your Order Placed Successfully !');
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
        //
    }


    public function destroy($id)
    {
        //
    }
}
