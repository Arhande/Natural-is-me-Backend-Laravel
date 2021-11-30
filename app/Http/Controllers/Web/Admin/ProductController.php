<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('admin.product', [
            'products'=>$products
        ]);
    }

    public function create(){
        $categories = Category::get();
        return view('admin.create-product', ['categories' => $categories]);
    }

    public function store(Request $request){
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
            $product->image = "/naturalisme/public" . Storage::url($image_path);
            $product->image_path = $image_path;
        }
        
        if ($request->hasFile('image_hover')) {
            $image_path = $request->file('image_hover')->store('public/products/hover');
            $product->image_hover = "/naturalisme/public" .  Storage::url($image_path);
            $product->image_hover_path = $image_path;
        }

        $product->save();

        return redirect()->back();
    }

    public function edit(Product $product){
        $categories = Category::get();
        return view('admin.edit-product', ['categories' => $categories, 'product'=>$product]);
    }

    public function update(Request $request, Product $product){
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
            $product->image = "/naturalisme/public" .  Storage::url($image_path);
            $product->image_path = $image_path;
        }
        
        if ($request->hasFile('image_hover')) {
            $image_path = $request->file('image_hover')->store('public/products/hover');
            $product->image_hover = "/naturalisme/public" .  Storage::url($image_path);
            $product->image_hover_path = $image_path;
        }

        $product->save();

        return redirect()->back();
    }
    
    public function destroy(Product $product){
        Storage::delete($product->image_path);
        Storage::delete($product->image_hover_path);
        $product->orders()->detach();
        $product->orders()->detach();
        Cart::where('product_id', '=', $product->id)->delete();
        $product->delete();

        return redirect()->back();
    }
}
