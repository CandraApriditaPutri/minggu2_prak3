<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return view('sarana.kantor', ['kantor' => 'Kesekretariatan, Akademik, dsb ']);
    }
    public function lab(){
        return view('sarana.lab', ['lab' => 'Laboratorium Pemrogaman, Laboratorium Visi Komputer, Laboratorium Proyek, 
        Laboratorium Komputer dan Jaringan, Laboratorium Sistem Informasi, Laboratorium Sistem Cerdas, Lab. Digital Talent Scholarship ']);
    }
    public function kelas(){
        return view('sarana.kelas', ['kelas' => 'MI2A, MI2B, MI2C, MI2D, MI2E, MI2F, TI2A, TI2B, TI2C, TI2D, TI2E, TI2F, TI2G, TI2H']);
    }
    public function lainnya(){
        return view('sarana.lainnya', ['lainnya' => 'Perpustakaan, Olahraga, Graha Polinema, dsb ']);
    }
}
