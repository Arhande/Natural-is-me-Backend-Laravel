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

    public function removeProduct(Product $product){

        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();

        $cart->delete(); 

        return redirect()->route('cart');
    }

    public function increment(Product $product){

        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();

        $cart->qty += 1;
        $cart->save();  

        return redirect()->route('cart');
    }

    public function decrement(Product $product){

        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();


        if($cart->qty <= 1){
            $cart->delete();
            return redirect()->route('cart');
        }

        $cart->qty -= 1;
        $cart->save();

        return redirect()->route('cart');

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
        $carts = Cart::where('user_id', Auth::user()->id)->with('product')->latest()->get();
        $total = 0;

        foreach($carts as $cart){
            $total += $cart->product->harga * $cart->qty;
        }
        return view('cart', [
            'carts' => $carts,
            'total' => $total
        ]);
    }
}
