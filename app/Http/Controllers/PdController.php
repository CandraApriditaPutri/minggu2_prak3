<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdController extends Controller
{
    public function mi(){
        return "Program Studi : MI";
    }

    public function ti(){
        return "Program Studi : TI";
    }
}
