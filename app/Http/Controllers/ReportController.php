<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function today_orders()
    {
        $orders = Order::orderBy('id', 'desc')->whereDate('created_at', today())->get();;

        return view('admin.reports.today-orders', compact('orders'));

    }

    public function profit_loss()
    {
/*        $reports = Order::orderBy('id', 'desc')->whereDate('created_at', today())->get();;

        $date = now()->startOfDay;

        $date = now()->subDays(30)->startOfDay;

        App\User::where('field_name', '>=', $date)->orderBy('field_name', 'desc')->limit(3)->get();*/


        return view('admin.reports.monthly-report', compact('reports'));

    }
}

