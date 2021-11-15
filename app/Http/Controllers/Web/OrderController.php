<?php

namespace App\Http\Controllers\Web;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return view('user.order', [
            'orders'=>$orders
        ]);
    }

    public function show(Order $order){
        return view('user.order-detail', [
            'order'=> $order->load('products', 'packages')
        ]);
    }

    public function create(){
        $carts = Cart::where('user_id', Auth::user()->id)->with('product', 'package')->latest()->get();
        $total = 0;

        if($carts->isEmpty()){
            return redirect()->route('cart');
        }

        foreach($carts as $cart){
            if($cart->product == null){
                $total += $cart->package->harga * $cart->qty;
            }else{
                $total += $cart->product->harga * $cart->qty;
            }
        }
        return view('user.checkout', [
            'carts' => $carts,
            'total' => $total
        ]);
    }


    public function store(Request $request){

        $carts = Cart::where('user_id', Auth::user()->id)->with('product', 'package')->get();
        $this->validate($request, [
            'nama_penerima' => 'required|max:255|string',
            'handphone' => 'required|numeric',
            'provinsi' => 'required|max:255|string',
            'kota' => 'required|max:255|string',
            'kecamatan' => 'required|max:255|string',
            'kodepos' => 'required|max:255|string',
            'alamat' => 'required|max:255|string'
        ]);
        
        $products = [];
        $packages = [];
        $total = 0;

        foreach($carts as $cart){
            if($cart->product == null){
                $packages[$cart->package_id]['qty'] = $cart->qty;
                $total += $cart->package->harga * $cart->qty;
            }else{
                $products[$cart->product_id]['qty'] = $cart->qty;
                $total += $cart->product->harga * $cart->qty;
            }
        }

        $order = new Order();
        $order->nama_penerima = $request->nama_penerima;
        $order->handphone = $request->handphone;
        $order->provinsi = $request->provinsi;
        $order->kota = $request->kota;
        $order->kecamatan = $request->kecamatan;
        $order->kodepos = $request->kodepos;
        $order->alamat = $request->alamat;
        $order->harga_total = $total;
        $order->ongkir = "10000";
        $order->courier_id = 1;
        $order->user_id = Auth::user()->id;
        $order->save();


        
        $order->products()->attach($products);
        $order->packages()->attach($packages);
        
        $deleteCart = Cart::where('user_id', Auth::user()->id)->delete();

        return redirect()->route('orders.bukti.store', ['order'=>$order->id]);
    }

    public function buktiEdit(Order $order){
        return view('user.upload-bukti', ['order'=>$order]);
    }

    public function buktiUpdate(Request $request, Order $order){
        $this->validate($request, [
            'atas_nama_rekening' => 'required|max:255|string',
            'image_bukti' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);

        $order->atas_nama_rekening = $request->atas_nama_rekening;
        $image_path = $request->file('image_bukti')->store('public/orders/images');
        $order->image_bukti = Storage::url($image_path);
        $order->image_bukti_path = $image_path;
        $order->status = "Menunggu Konfirmasi";
        $order->save();

        return redirect()->route('orders.show', ['order' => $order->id]);
    }

    public function destroy(Order $order){
        $order->products()->detach();
        $order->delete();

        return redirect()->back();
    }
}
