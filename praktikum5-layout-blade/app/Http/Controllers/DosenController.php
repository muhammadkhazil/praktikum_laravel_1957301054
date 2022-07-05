<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $arrMahasiswa = ["Luhut Panjaitan", "Jokowi", "Vladimir Putin", "Lisa Pertama"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function tes(){
        return view('mahasiswa');
    }
}