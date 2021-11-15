<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $products = Product::latest()->take(4)->get();
        return view('user.index', [
            'products' => $products
        ]);
    }
}
