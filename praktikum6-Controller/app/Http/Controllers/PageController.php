<?php

namespace App\Http\ControllerS;

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

// Mengirim data ke view
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
