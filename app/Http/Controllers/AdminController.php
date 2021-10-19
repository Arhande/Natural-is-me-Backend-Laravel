<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard-admin');
    }

    // ========================= Products =========================

    public function products(){
        $products = Product::latest()->get();
        return view('product-admin', [
            'products'=>$products
        ]);
    }

    public function productsCreate(){
        $categories = Category::get();
        return view('create-product-admin', ['categories' => $categories]);
    }

    public function storeProducts(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'perawatan' => 'required|max:255|string',
            'jenis' => 'required|max:255|string',
            'air' => 'required|max:255|string',
            'harga' => 'required|numeric',
            'category_id' => 'required|max:255|string',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:5000',
            'image_hover' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);


        $product = new Product();
        $product->category_id = $request->category_id;
        $product->first_name = $request->first_name;
        $product->last_name = $request->last_name;
        $product->perawatan = $request->perawatan;
        $product->jenis = $request->jenis;
        $product->air = $request->air;
        $product->harga = $request->harga;
        
        
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/products/images');
            $product->image = Storage::url($image_path);
            $product->image_path = $image_path;
        }
        
        if ($request->hasFile('image_hover')) {
            $image_path = $request->file('image_hover')->store('public/products/hover');
            $product->image_hover = Storage::url($image_path);
            $product->image_hover_path = $image_path;
        }

        $product->save();

        return redirect()->back();
    }

    public function productsEdit(Product $product){
        $categories = Category::get();
        return view('edit-product-admin', ['categories' => $categories, 'product'=>$product]);
    }

    public function productsUpdate(Request $request, Product $product){
        $this->validate($request, [
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'perawatan' => 'required|max:255|string',
            'jenis' => 'required|max:255|string',
            'air' => 'required|max:255|string',
            'harga' => 'required|numeric',
            'category_id' => 'required|max:255|string',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:5000',
            'image_hover' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);


        $product->category_id = $request->category_id;
        $product->first_name = $request->first_name;
        $product->last_name = $request->last_name;
        $product->perawatan = $request->perawatan;
        $product->jenis = $request->jenis;
        $product->air = $request->air;
        $product->harga = $request->harga;
        
        
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/products/images');
            $product->image = Storage::url($image_path);
            $product->image_path = $image_path;
        }
        
        if ($request->hasFile('image_hover')) {
            $image_path = $request->file('image_hover')->store('public/products/hover');
            $product->image_hover = Storage::url($image_path);
            $product->image_hover_path = $image_path;
        }

        $product->save();

        return redirect()->back();
    }



    // ========================= Orders =========================

    public function orders(){
        $orders = Order::where('status', '!=', '%Selesai%')->get();
        return view('order-admin', [
            'orders'=>$orders
        ]);
    }

    public function showOrder(Order $order){
        return view('order-detail-admin', [
            'order'=>$order
        ]);
    }

    public function updateStatusOrder(Request $request, Order $order){
        $this->validate($request, [
            'status' => 'required|max:255|string',
            'catatan' => 'required|string',
        ]);

        $order->status = $request->status;
        $order->catatan = $request->catatan;
        $order->save();
        
        return redirect()->route('admin.orders');
    }

    public function history(){
        return view('riwayat-admin');
    }
}
