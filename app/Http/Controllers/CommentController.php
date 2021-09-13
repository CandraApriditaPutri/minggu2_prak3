<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($nama, $id){
        return view ('comment', ['nama' => $nama], ['id' => $id]);
    }
}
