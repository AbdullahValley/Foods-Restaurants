<?php

namespace App\Http\Controllers;

use App\Food;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        //$restaurants = Restaurant::orderBy('id', 'desc')->where('status', 1)->get();

        //$foods = Food::orderBy('id', 'desc')->where('status', 1)->get();
        $cart = Cart::orderBy('id', 'desc')->where('status', 1)->where('checkout_id', session()->get('_token'))->get();
        //$balance = DB::table('carts')->where('user_id' '=' Auth::id())->sum('balance');

        $amount = Cart::where('status', 1)->where('checkout_id', session()->get('_token'))->sum('price');

        return view('front-view.cart', compact('cart', 'amount'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $cart = new Cart();

        $cart->user_id          = Auth::id();
        $cart->checkout_id      = $request->session()->get('_token');
        $cart->product_id       = $request->product_id;
        $cart->name             = $request->name;
        $cart->price            = $request->price;
        $cart->quantity         = 1;
        $cart->attributes       = "";
        $cart->status           = 1;

        $cart->save();

        return redirect('/cart')->with('successMsg', 'Successfully Added to Your Cart !');
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
