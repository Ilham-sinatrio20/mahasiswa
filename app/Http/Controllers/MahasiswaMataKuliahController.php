<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_Matakuliah;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MahasiswaMataKuliahController extends Controller
{
    public function index(){
        $mahasiswaMatakuliah = Mahasiswa_Matakuliah::all();
        return view('mahasiswas.nilai', compact('mahasiswaMatakuliah'));
    }
}
