<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::get();
        return view('admin.package', [
            'packages' => $packages
        ]);
    }

    public function create(){
        return view('admin.create-package');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required|max:255|string',
            'harga' => 'required|max:255|string',
            'deskripsi1' => 'required|max:255|string',
            'deskripsi2' => 'required|max:255|string',
            'deskripsi3' => 'required|max:255|string',
            'deskripsi4' => 'required|max:255|string',
            'deskripsi5' => 'required|max:255|string',
            'category' => 'nullable|in:indoor,outdoor,null',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);


        $package = new Package();
        $package->nama = $request->nama;
        $package->harga = $request->harga;
        $package->category = $request->category;
        $package->deskripsi1 = $request->deskripsi1;
        $package->deskripsi2 = $request->deskripsi2;
        $package->deskripsi3 = $request->deskripsi3;
        $package->deskripsi4 = $request->deskripsi4;
        $package->deskripsi5 = $request->deskripsi5;
        
        
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/packages/images');
            $package->image = "/naturalisme/public" . Storage::url($image_path);
            $package->image_path = $image_path;
        }

        $package->save();

        return redirect()->route('admin.packages');
    }

    public function edit(Package $package){
        return view('admin.edit-package', ['package'=>$package]);
    }

    public function update(Request $request, Package $package){
        $this->validate($request, [
            'nama' => 'required|max:255|string',
            'harga' => 'required|max:255|string',
            'deskripsi1' => 'required|max:255|string',
            'deskripsi2' => 'required|max:255|string',
            'deskripsi3' => 'required|max:255|string',
            'deskripsi4' => 'required|max:255|string',
            'deskripsi5' => 'required|max:255|string',
            'category' => 'nullable|in:indoor,outdoor,null',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);

        $package->nama = $request->nama;
        $package->harga = $request->harga;
        $package->category = $request->category;
        $package->deskripsi1 = $request->deskripsi1;
        $package->deskripsi2 = $request->deskripsi2;
        $package->deskripsi3 = $request->deskripsi3;
        $package->deskripsi4 = $request->deskripsi4;
        $package->deskripsi5 = $request->deskripsi5;
        
        
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/packages/images');
            $package->image = "/naturalisme/public" . Storage::url($image_path);
            $package->image_path = $image_path;
        }

        $package->save();

        return redirect()->back();
    }

    public function destroy(Package $package){
        Storage::delete($package->image_path);
        Storage::delete($package->image_hover_path);
        $package->orders()->detach();
        $package->orders()->detach();
        Cart::where('package_id', '=', $package->id)->delete();
        $package->delete();

        return redirect()->back();
    }
}
