<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;



class GalleryInspirasiController extends Controller
{
    public function index(){
        return view('user.gallery-inspirasi');
    }
}
