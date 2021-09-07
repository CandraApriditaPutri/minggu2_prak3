<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika', function(){
        return "Prodi Manajemen Informatika";
    });
    Route::get('/teknik-informatika', function(){
        return "Prodi Teknik Informatika";
    });
});

Route::get('/news/{id}', function ($id) {
    return 'Halaman news dengan ID '.$id;
});

Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran', function(){
        return "Sarana Perkantoran";
    });
    Route::get('/laboratorium', function(){
        return "Sarana Laboratorium";
    });
    Route::get('/kelas', function(){
        return "Sarana Kelas";
    });
    Route::get('/lainnya', function(){
        return "Sarana Lainnya";
    });
});

Route::get('/about', [AboutController::class,'about']);

Route::get('/user/{nama}/comment/{id?}', function ($nama, $id){
    return 'User '. $nama. 'mengisi komen ke- ' .$id;
});