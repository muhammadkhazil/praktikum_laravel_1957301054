<?php

// Membuat Controller manual
// class PageController extends Controller
// {
//     public function index()
//     {
//         return "Halaman Home";
//     }
//     public function tampil()
//     {
//         return "Data Mahasiswa";
//     }
// }

// Mengakses View dari controller
// class PageController extends Controller
// {
//     public function index()
//     {
//         return view('welcome');
//     }
//     public function tampil()
//     {
//         return "Data Mahasiswa";
//     }
// }


//  Mengirim data ke view
// class PageController extends Controller
// {
//     public function index()
//     {
//         return view('welcome');
//     }
//     public function tampil()
//     {
//         $arrMahasiswa = [
//             "Megawati", "Luhut Panjaitan", "Susilo Bambang Kusumo",
//             "Prabowo Subianto"
//         ];
//         return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
//     }
// }

// Memindahkan file controller ke dalam folder admin
// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;

// class PageController extends Controller
// {
//     public function index()
//     {
//         return "Halaman Home Amdmin";
//     }
//     public function tampil()
//     {
//         return "Data Mahasiswa Admin";
//     }
// }

// Mengakes laravel Facade
// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;

// class PageController extends Controller
// {
//     public function index()
//     {
//         return "Halaman Home Amdmin";
//     }
//     public function tampil()
//     {
//         return "Data Mahasiswa Admin";
//     }
//     public function cobaFacade()
//     {
//         echo \Illuminate\Support\Str::snake('SedangBelajarLaravelUncover');
//         echo "<br>";
//         echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
//     }
// }

// Mengakses laravel facade dengan use 
// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use \Illuminate\Support\Str;

// class PageController extends Controller
// {
//     public function index()
//     {
//         return "Halaman Home Amdmin";
//     }
//     public function tampil()
//     {
//         return "Data Mahasiswa Admin";
//     }
//     public function cobaFacade()
//     {
//         echo Str::snake('SedangBelajarLaravelUncover');
//         echo "<br>";
//         echo Str::kebab('SedangBelajarLaravelUncover');
//     }
// }


// Mengakses External class
// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;

// class PageController extends Controller
// {
//     public function index()
//     {
//         return "Halaman Home Amdmin";
//     }
//     public function tampil()
//     {
//         return "Data Mahasiswa Admin";
//     }
//     public function cobaFacade()
//     {
//         echo Str::snake('SedangBelajarLaravelUncover');
//         echo "<br>";
//         echo Str::kebab('SedangBelajarLaravelUncover');
//     }
//     public function cobaClass()
//     {
//         $foo = new \App\Http\Controllers\Coba\Foo();
//         echo $foo->bar();
//     }
// }


// Mengakses external class menggunakan perintah use
// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use \Illuminate\Support\Str;
// use \App\Http\Controllers\Coba\Foo;

// class PageController extends Controller
// {
//     public function index()
//     {
//         return "Halaman Home Amdmin";
//     }
//     public function tampil()
//     {
//         return "Data Mahasiswa Admin";
//     }
//     public function cobaFacade()
//     {
//         echo Str::snake('SedangBelajarLaravelUncover');
//         echo "<br>";
//         echo Str::kebab('SedangBelajarLaravelUncover');
//     }
//     public function cobaClass()
//     {
//         $foo = new Foo();
//         echo $foo->bar();
//     }
// }
