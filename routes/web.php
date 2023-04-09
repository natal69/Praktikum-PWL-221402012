<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('/admin/pengantar');
});

//Route::get('/daftar_mahasiswa',
//'App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'pengantar']);
//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
//Route::match(['get', 'post'], '/detail_mahasiswa',
//[MahasiswaController::class, 'detail_mhs']);
Route::view('/detail_mahasiswa', 'detail_mahasiswa');
Route::get('/admin/pengantar', [AdminController::class, 'index']);
Route::get('/admin/keempat', [AdminController::class, 'show_keempat']);
Route::get('/admin/kelima', [AdminController::class, 'show_kelima']);
Route::get('/admin/kedua', [AdminController::class, 'show_kedua']);
Route::get('/admin/ketiga', [AdminController::class, 'show_ketiga']);
Route::get('/admin/pertama', [AdminController::class, 'show_pertama']);
