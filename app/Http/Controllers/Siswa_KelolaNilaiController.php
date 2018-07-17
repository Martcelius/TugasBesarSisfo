<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswa_KelolaNilaiController extends Controller
{
    //
    public function index()
    {
    	# code...
        $title = 'Lihat Nilai';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('siswa/kelolaNilai_showNilai')->with('title',$title);
    }
}
