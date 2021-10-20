<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatanTamanController extends Controller
{
    public function index(){
        return view('taman');
    }

    public function PerawatanTaman(){

        return view('perawatanTaman');
    }
    public function tamanIndoor(){

        return view('tamanIndoor');
    }
    public function tamanOutdoor(){

        return view('tamanOutdoor');
    }
}
