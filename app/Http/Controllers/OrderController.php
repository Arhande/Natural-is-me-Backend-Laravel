<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(){
        $order = Order::where('user_id', Auth::user()->id)->with('products')->get();

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $order
        ]);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama_penerima' => 'required|max:255|string',
            'handphone' => 'required|numeric',
            'provinsi' => 'required|max:255|string',
            'kota' => 'required|max:255|string',
            'kecamatan' => 'required|max:255|string',
            'kodepos' => 'required|max:255|string',
            'alamat' => 'required|max:255|string',
            'harga_total' => 'required|gt:0|integer',
            'ongkir' => 'required|gt:0|integer',
            'courier_id' => 'required|exists:couriers,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => 'The given data was invalid',
                'data'=> $this->transform($validator)
            ], 422);
        }

        if (!Cart::where('user_id', Auth::user()->id)->with('product')->exists()) {
            return response()->json([
                'error' => true,
                'message' => 'Cart Kosong'
            ], 422);
        }

        $order = new Order();
        $order->nama_penerima = $request->nama_penerima;
        $order->handphone = $request->handphone;
        $order->provinsi = $request->provinsi;
        $order->kota = $request->kota;
        $order->kecamatan = $request->kecamatan;
        $order->kodepos = $request->kodepos;
        $order->alamat = $request->alamat;
        $order->harga_total = $request->harga_total;
        $order->ongkir = $request->ongkir;
        $order->courier_id = $request->courier_id;
        $order->user_id = Auth::user()->id;
        $order->save();

        $carts = Cart::where('user_id', Auth::user()->id)->with('product')->get();

        $products = [];

        foreach($carts as $cart){
            $products[$cart->product_id]['qty'] = $cart->qty;
        }
        
        $order->products()->attach($products);
        
        $deleteCart = Cart::where('user_id', Auth::user()->id)->delete();

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $order->load('products')
        ]);
    }

    private function transform($validator)
    {
        $response = [];
        foreach ($validator->messages()->toArray() as $key => $value) {
            $response[$key] = $value[0]; 
        }

        return $response;
    }

    public function indexWeb(){
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return view('order', [
            'orders'=>$orders
        ]);
    }

    public function showWeb(Order $order){
        return view('order-detail', [
            'order'=> $order->load('products')
        ]);
    }

    public function indexStoreWeb(){
        $carts = Cart::where('user_id', Auth::user()->id)->with('product')->latest()->get();
        $total = 0;

        if($carts->isEmpty()){
            return redirect()->route('cart');
        }

        foreach($carts as $cart){
            $total += $cart->product->harga * $cart->qty;
        }
        return view('checkout', [
            'carts' => $carts,
            'total' => $total
        ]);
    }


    public function storeWeb(Request $request){

        $carts = Cart::where('user_id', Auth::user()->id)->with('product')->get();
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
        $total = 0;

        foreach($carts as $cart){
            $products[$cart->product_id]['qty'] = $cart->qty;
            $total += $cart->product->harga * $cart->qty;
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
        $order->status= "Unpaid";
        $order->user_id = Auth::user()->id;
        $order->save();


        
        $order->products()->attach($products);
        
        $deleteCart = Cart::where('user_id', Auth::user()->id)->delete();

        return redirect()->route('cart');
    }
}
