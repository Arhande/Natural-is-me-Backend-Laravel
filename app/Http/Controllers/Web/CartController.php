<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('user_id', Auth::user()->id)->with('product', 'package')->latest()->get();
        $total = 0;
    
        foreach($carts as $cart){
            if($cart->product == null){
                $total += $cart->package->harga * $cart->qty;
            }else{
                $total += $cart->product->harga * $cart->qty;
            }
        }
        return view('user.cart', [
            'carts' => $carts,
            'total' => $total
        ]);
    }

    public function increment(Cart $cart){

        $cart->qty += 1;
        $cart->save();  

        return redirect()->route('cart');
    }

    public function decrement(Cart $cart){

        if($cart->qty <= 1){
            $cart->delete();
            return redirect()->route('cart');
        }

        $cart->qty -= 1;
        $cart->save();

        return redirect()->route('cart');
    }

    public function removeProduct(Cart $cart){

        $cart->delete(); 

        return redirect()->route('cart');
    }



}
