<?php

namespace App\Http\Controllers\Web;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Package;

class ProductController extends Controller
{
    
    public function index(Request $request){
        $products = Product::latest();

        if ($request->filled('category')) {
            $category = Category::where('name', 'LIKE', "%$request->category%")->first();
            if($category){
                $products = $products->where('category_id', $category->id);
            }
        }
        
        $products = $products->get();

        return view('user.products', [
            'products' => $products
        ]);
    }

    public function show(Product $product){
        return view('user.product-detail', [
            'product' => $product
        ]);
    }

    public function addProductToCart(Request $request, Product $product){


        $cart = Cart::firstOrNew(
            [
                'product_id' => $product->id, 
                'user_id' =>  Auth::user()->id,
            ]
        );

        if(!$cart->exists()){
            $cart->qty = 1;
        }else{
            $cart->qty = $cart->qty + 1;
        }
        $cart->save();

        return redirect()->back();
    }

    public function addPackageToCart(Request $request, Package $package){

        $cart = Cart::firstOrNew(
            [
                'package_id' => $package->id, 
                'user_id' =>  Auth::user()->id,
            ]
        );

        if(!$cart->exists()){
            $cart->qty = 1;
        }else{
            $cart->qty = $cart->qty + 1;
        }
        $cart->save();
        return redirect()->back();
    }
}
