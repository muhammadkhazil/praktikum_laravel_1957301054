<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $arrMahasiswa = [
            "Megawati", "Luhut Panjaitan",
            "Susilo Bambang Kusumo", "Prabowo Subianto"
        ];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}
