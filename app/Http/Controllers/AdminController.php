<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard-admin');
    }

    public function products(){
        return view('product-admin');
    }

    public function orders(){
        $orders = Order::where('status', '!=', '%Selesai%')->get();
        return view('order-admin', [
            'orders'=>$orders
        ]);
    }

    public function showOrder(){
        $orders = Order::where('status', '!=', '%Selesai%')->get();
        return view('order-detail-admin', [
            'orders'=>$orders
        ]);
    }

    public function history(){
        return view('riwayat-admin');
    }
}
