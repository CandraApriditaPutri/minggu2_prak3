<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdController extends Controller
{
    public function mi(){
        return view('prodi.mi', ['name' => 'Manajemen Informatika']);
    }

    public function ti(){
        return view('prodi.ti', ['name' => 'Teknik Informatika']);
    }
}
