<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderHasProducts;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $userCount = User::count();
        $orderCount = Order::count();
        $harga_total = Order::sum('harga_total');
        $ongkir = Order::sum('ongkir');
        $omset = $harga_total + $ongkir;
        $totalTerjual = OrderHasProducts::sum('qty');
        return view('admin.dashboard', [
            'userCount'=>$userCount,
            'orderCount'=>$orderCount,
            'omset'=>$omset,
            'totalTerjual'=>$totalTerjual,
        ]);
    }
}
