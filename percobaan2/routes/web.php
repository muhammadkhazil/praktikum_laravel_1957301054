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

route::get('/hello',function(){
    return 'hello muhammad khazil';
});

route::get('/belajar',function(){
    echo'<h1>hello world</h1>';
    echo'<p>sedang belajar laravel</p>';
});

route::get('/mahasiswa/profil/coba', function(){
    echo'<h2 style="text-align: center"><u>welcome profil coba</u></h2>';
});

route::get('/mahasiswa/{nama}',function($nama){
    return"tampilkan data mahasiswa bernama $nama";
});

route::get('/stok_barang/{jenis}/{merek}',function ($jenis,$merek){
    return "cek sisa stok untuk  $jenis $merek";
});

route::get('/stok_barang/{jenis}/{merek}',function ($a,$b){
    return "cek sisa stok untuk  $a $b";
});

route::get('/stok_barang/{jenis?}/{merek?}',
function($a='smartphone',$b='samsung'){
    return "cek sisa stok untuk $a $b";
});

route::get('/user/{id}', function($id){
    return"tampilkan user dengan id= $id";
});

route::get('/user/{id}', function($id) {
    return"tampilkan user dengan id= $id";
})->where('id', '[0-9]+');

route::get('/user/{id}', function($id){
    return"tampilkan user dengan id=$id";
})->where('id','[A-Z]{2}[0-9]+');

route::get('/hubungi-kami', function(){
    return'<h1>hubungi kami</h1>';
});

route::redirect('/contact-us','/hubungi-kami');

route::get('admin/mahasiswa', function (){
    return"<h1>Daftar Mahasiswa<h1>";
});

route::get('admin/dosen', function (){
    return"<h1>Daftar Dosen<h1>";
});

route::get('admin/karyawan', function (){
    return"<h1>Daftar Karyawan<h1>";
});

route::prefix('/admin')->group(function(){
    route::get('/mahasiswa', function(){
        echo"<h1>Daftar Mahasiswa</h1>";
    });

    route::get('/dosen', function(){
        echo"<h1>Daftar Dosen</h1>";
    });

    route::get('/karyawan', function(){
        echo"<h1>Daftar Karyawan</h1>";
    });
});

route::fallback(function(){
    return"Maaf, alamat tidak ditemukan";
});

route::get('/buku/1', function(){
    return "buku ke-1";
});

route::get('/buku/1', function(){
    return "buku saya ke-1";
});

route::get('/buku/1', function(){
    return "buku kita ke-1";
});

route::get('/buku/{a}', function ($a){
    return"buku ke-$a";
});

route::get('/buku/{a}', function ($a){
    return"buku saya ke-$a";
});

route::get('/buku/{a}', function ($a){
    return"buku kita ke-$a";
});

route::get('mahasiswa/andi', function (){
    echo"halaman mahasiswa andi";
});

