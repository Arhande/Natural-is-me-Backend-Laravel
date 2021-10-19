<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatanTamanController extends Controller
{
    public function index(){
        return view('pembuatan-taman');
    }
}
