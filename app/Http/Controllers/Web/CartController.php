<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('user_id', Auth::user()->id)->with('product')->latest()->get();
        $total = 0;
    
        foreach($carts as $cart){
            $total += $cart->product->harga * $cart->qty;
        }
        return view('user.cart', [
            'carts' => $carts,
            'total' => $total
        ]);
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

    public function removeProduct(Product $product){

        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();

        $cart->delete(); 

        return redirect()->route('cart');
    }



}
