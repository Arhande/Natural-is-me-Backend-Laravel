<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'perawatan' => 'required|max:255|string',
            'jenis' => 'required|max:255|string',
            'air' => 'required|max:255|string',
            'harga' => 'required|integer|gt:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:5000',
            'image_hover' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => 'The given data was invalid',
                'data'=> $this->transform($validator)
            ], 422);
        }

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

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'perawatan' => 'required|max:255|string',
            'jenis' => 'required|max:255|string',
            'air' => 'required|max:255|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:5000',
            'image_hover' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => 'The given data was invalid',
                'data'=> $this->transform($validator)
            ], 422);
        }

        $product->category_id = $request->category_id;
        $product->first_name = $request->first_name;
        $product->last_name = $request->last_name;
        $product->perawatan = $request->perawatan;
        $product->jenis = $request->jenis;
        $product->air = $request->air;
        $product->harga = $request->harga;

        if ($request->hasFile('image')) {
            //upload new update
            $new_image_path = $request->file('image')->store('public/products/images');
            //delete old image
            Storage::delete($product->image_path);
            //update new image
            $product->image = Storage::url($new_image_path);
            $product->image_path = $new_image_path;
        }

        if ($request->hasFile('image_hover')) {
            //upload new update
            $new_image_path = $request->file('image_hover')->store('public/products/hover');
            //delete old image
            Storage::delete($product->image_hover_path);
            //update new image
            $product->image_hover = Storage::url($new_image_path);
            $product->image_hover_path = $new_image_path;
        }

        $product->save();

        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image_path);
        Storage::delete($product->image_hover_path);
        $product->delete();

        sleep(1);
        return response()->json([
            'error' => false,
            'message' => "Sukses",
            'data' => $product
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

    public function indexWeb(Request $request){
        $products = Product::latest();

        if ($request->filled('category')) {
            $category = Category::where('name', 'LIKE', "%$request->category%")->first();
            if($category){
                $products = $products->where('category_id', $category->id);
            }
        }
        
        $products = $products->get();

        return view('products', [
            'products' => $products
        ]);
    }

    public function details(Product $product){
        return view('product-detail', [
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
}
