<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index($jurusan, $prodi)
    {
        $data = ['jurusan' => $jurusan, 'prodi' => $prodi];
        return view('informasi')->with('data', $data);
    }
}
