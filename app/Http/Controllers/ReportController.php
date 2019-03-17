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
        $reports = Order::where('status', 2)->selectRaw('COUNT(id) as orders')->selectRaw('SUM(total) as total')->selectRaw('SUM(commission) as commission')->whereMonth('created_at', '=', date('m'))->first();

        $today_reports = Order::where('status', 2)->selectRaw('COUNT(id) as orders')->selectRaw('SUM(total) as total')->selectRaw('SUM(commission) as commission')->whereDay('created_at', '=', date('d'))->first();

        return view('admin.reports.monthly-report', compact('reports', 'today_reports'));

    }
}

