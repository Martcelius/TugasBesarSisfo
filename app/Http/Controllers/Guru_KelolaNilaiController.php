<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Guru_KelolaNilaiController extends Controller
{
    //
    public function index()
    {
    	# code...
        $title = 'Kelola Nilai';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('guru/kelolaNilai_pilihKelas')->with('title',$title);
    }
}
