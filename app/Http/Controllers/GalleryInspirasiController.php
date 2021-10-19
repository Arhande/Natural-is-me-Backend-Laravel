<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryInspirasiController extends Controller
{
    public function index(){
        return view('gallery-inspirasi');
    }
}
