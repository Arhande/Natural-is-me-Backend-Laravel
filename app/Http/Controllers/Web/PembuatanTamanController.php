<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Package;

class PembuatanTamanController extends Controller
{
    public function index(){
        $package = Package::first();
        return view('user.taman', [
            'package'=>$package
        ]);
    }

    public function PerawatanTaman(){

        $package = Package::first();
        return view('user.perawatanTaman', [
            'package'=>$package
        ]);
    }
    public function tamanIndoor(){
        $packages = Package::where('category', 'indoor')->get();
        return view('user.tamanIndoor', [
            'packages'=>$packages
        ]);
    }
    public function tamanOutdoor(){
        $packages = Package::where('category', 'outdoor')->get();
        return view('user.tamanOutdoor', [
            'packages'=>$packages
        ]);
    }
}
