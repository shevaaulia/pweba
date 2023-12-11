<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// mencoba salah satu route
Route::get('jumlah', function () {
    $hasil = 2+3;
    return "Hasil Penjumlahan = " . (string)$hasil;
});

// mencoba lagi yang lain
Route::get('halo', function () {
    return "Selamat Datang di Situs web";
});

// mencoba dari malasngoding
Route::get('blog', function () {
	return view('blog');
});

// mulai dari sini buat yang tugas
// hello.html
Route::get('hello', function () {
    return view('hello');
});

//js1.html
Route::get('js1', function () {
    return view('js1');
});

//link.html
Route::get('link', function () {
    return view('link');
});

//responsive.html
Route::get('responsive', function () {
    return view('responsive');
});

//style.html
Route::get('style', function () {
    return view('style');
});

//Task1.html
Route::get('Task1', function () {
    return view('Task1');
});

//Task2.html
Route::get('Task2', function () {
    return view('Task2');
});

//TaskAlertLogic.html
Route::get('TaskAlertLogic', function () {
    return view('TaskAlertLogic');
});

//TaskLayout.html
Route::get('TaskLayout', function () {
    return view('TaskLayout');
});

//validasi1.html
Route::get('validasi1', function () {
    return view('validasi1');
});

// controller
// contoh kasus tanpa parameter
// @ digunakan untuk memisahkan method
Route::get('dosen', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('tampiljam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\DosenController@blog');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');


//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//latihan eas cewe
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//latihan eas cowo
Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@index');
Route::get('/keranjangbelanja/tambah','App\Http\Controllers\BelanjaController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\BelanjaController@hapus');

//tugas pra eas
Route::get('/sepeda','App\Http\Controllers\SepedaController@index');
Route::get('/sepeda/tambah','App\Http\Controllers\SepedaController@tambah');
Route::post('/sepeda/store','App\Http\Controllers\SepedaController@store');
Route::get('/sepeda/edit/{id}','App\Http\Controllers\SepedaController@edit');
Route::post('/sepeda/update','App\Http\Controllers\SepedaController@update');
Route::get('/sepeda/hapus/{id}','App\Http\Controllers\SepedaController@hapus');
Route::get('/sepeda/view/{id}','App\Http\Controllers\SepedaController@view');
Route::get('/sepeda/cari','App\Http\Controllers\SepedaController@cari');

//EAS
Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::post('/mahasiswa/store','App\Http\Controllers\MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}','App\Http\Controllers\MahasiswaController@edit');
Route::post('/mahasiswa/update','App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/view/{id}','App\Http\Controllers\MahasiswaController@view');
