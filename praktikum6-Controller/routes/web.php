<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Coba\Foo;
use App\Http\Controllers;

use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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

// router bawaan laravel
Route::get('/', function () {
    return view('welcome');
});

// Membuat router untuk mengakses PageController---------
// Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
// Route::get('/mahasiswa', [App\Http\Controllers\PageController::class, 'tampil']);

// Cara Penulisan Route Untuk Controller namespace pada bagian atas-----------
// use App\Http\Controllers\PageController;
// Route::get('/', [PageController::class, 'index']);
// Route::get('/mahasiswa', [PageController::class, 'tampil']);

// Penulisan Route untuk controller didalam folder admin---------------
// use App\Http\Controllers\Admin\PageController;

// Route::get('/', [PageController::class, 'index']);
// Route::get('/mahasiswa', [PageController::class, 'tampil']);

// Penulisan Facade
// use App\Http\Controllers\Admin\PageController;

// Route::get('/coba-facade', [PageController::class, 'cobaFacade']);

// Mengakses external class
// Route::get('/coba-class', [PageController::class, 'cobaClass']);

// Route Mahasiswa
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route Dosen
use App\Http\Controllers\DosenController;

Route::get('/dosen', [DosenController::class, 'index']);

// Route Gallery
use App\Http\Controllers\GalleryController;

Route::get('/gallery', [GalleryController::class, 'index']);

// Route Informasi
use App\Http\Controllers\InformasiController;

Route::get('/informasi/{jurusan}/{prodi}', [InformasiController::class, 'index']);




// 
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = [
//         "Megawati", "Luhut Panjaitan", "Susilo Bambang Kusumo",
//         "Prabowo Subianto"
//     ];
//     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
// })->name('mahasiswa');

// Route::get('dosen', function () {
//     $arrDosen = [
//         "Megawati, M.M.", "Prof. Luhut Panjaitan",
//         "Dr. Susilo Bambang Kusumo", "Dr. Prabowo Subianto, M.Kom."
//     ];
//     return view('dosen')->with('dosen', $arrDosen);
// })->name('dosen');

// Route::get('gallery', function () {
//     return view('gallery');
// })->name('gallery');

// Route::get('informasi/{jurusan}/{prodi}', function ($jurusan, $prodi) {
//     $data = [$jurusan, $prodi];
//     return view('informasi')->with('data', $data);
// })->name('info');


//
// // Membuat untuk data mahasiswa
// Route::get('mahasiswa', function () {
//     $arrMahasiswa = [
//         "Luhut Panjaitan", "Jokowi", "Vladimir Putin",
//         "Lisa Permata"
//     ];
//     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });
// // Membuat untuk data Dosen
// Route::get('dosen', function () {
//     $arrDosen = [
//         "Maya Fitriani, M.M.", "Prof, Silvia Nst, M.Farm",
//         "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."
//     ];
//     return view('dosen')->with('dosen', $arrDosen);
// });
// //Membuat untuk gallery
// Route::get('gallery', function () {
//     return view('gallery');
// });
// // Membuat route admin
// Route::get('admin', function () {
//     return view('admin');
// });