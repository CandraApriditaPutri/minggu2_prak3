<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "Selamat Datang di Jurusan Teknologi Informasi Politeknik Negeri Malang";
    }
}