<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PembuatanTamanController extends Controller
{
    public function index(){
        return view('user.taman');
    }

    public function PerawatanTaman(){

        return view('user.perawatanTaman');
    }
    public function tamanIndoor(){

        return view('user.tamanIndoor');
    }
    public function tamanOutdoor(){

        return view('user.tamanOutdoor');
    }
}
