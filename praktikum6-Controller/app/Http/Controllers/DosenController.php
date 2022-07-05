<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $arrDosen = [
            "Megawati, M.M.", "Prof. Luhut Panjaitan",
            "Dr. Susilo Bambang Kusumo", "Dr. Prabowo Subiantom, M.Kom."
        ];
        return view('dosen')->with('dosen', $arrDosen);
    }
}
