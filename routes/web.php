<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);

Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mahasiswa']);

Route::match(['get', 'post'], 'daftar');

Route::get('/', function () {
    return view('welcome');
});





//Route::get('/daftar_mahasiswa', 'App\Controllers\MahasiswaController@index');


