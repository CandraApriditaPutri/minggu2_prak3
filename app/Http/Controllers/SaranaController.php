<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return "Sarana Perkantoran";
    }
    public function lab(){
        return "Sarana Laboratorium";
    }
    public function kelas(){
        return "Sarana Kelas";
    }
    public function lainnya(){
        return "Sarana Lainnya";
    }
}
