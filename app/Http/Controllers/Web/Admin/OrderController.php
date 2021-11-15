<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('status', '!=', 'Selesai')->get();
        return view('admin.order', [
            'orders'=>$orders
        ]);
    }

    public function show(Order $order){
        return view('admin.order-detail', [
            'order'=>$order
        ]);
    }

    public function updateStatus(Request $request, Order $order){
        $this->validate($request, [
            'status' => 'required|max:255|string',
            'catatan' => 'nullable|string'
        ]);

        $order->status = $request->status;
        $order->catatan = $request->catatan;
        $order->save();
        
        return redirect()->route('admin.orders');
    }

    public function history(){
        $orders = Order::where('status', '=', 'Selesai')->get();
        return view('admin.riwayat', ['orders' => $orders]);
    }
}
