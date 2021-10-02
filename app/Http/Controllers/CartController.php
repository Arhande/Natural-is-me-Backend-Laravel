<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index(){
        $cart = Cart::where('user_id', Auth::user()->id)->with('product')->get();

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $cart
        ]);
    }


    public function storeProductCart(Request $request, Product $product){
        
        $validator = Validator::make($request->all(), [
            'qty' => 'required|integer|gt:0'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => 'The given data was invalid',
                'data'=> $this->transform($validator)
            ], 422);
        }

        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
        if($cart){
            $cart->qty += $request->qty;
            $cart->save();
            return response()->json([
                'error' => false,
                'message' => "sukses",
                "data"=>$cart
            ]);
        }


        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $product->id;
        $cart->qty = $request->qty;
        $cart->save();

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $cart
        ]);
    }

    public function increment(Product $product){

        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();

        if(!$cart){
            return response()->json([
                'error' => true,
                'message' => "Product di cart tidak ditemukan"
            ], 422);
        }

        $cart->qty += 1;
        $cart->save();  

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $cart->load('product')
        ]);
    }

    public function decrement(Product $product){

        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();

        if(!$cart){
            return response()->json([
                'error' => true,
                'message' => "Product di cart tidak ditemukan"
            ], 422);
        }

        if($cart->qty <= 1){
            return response()->json([
                'error' => true,
                'message' => "Qty tidak boleh 0"
            ], 422);
        }

        $cart->qty -= 1;
        $cart->save();

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $cart->load('product')
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
}
