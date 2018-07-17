<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswa_KelolaTugasController extends Controller
{
    //
    public function index()
    {
    	# code...
        $title = 'Kelola Tugas';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('siswa/kelolaTugas_pilihMapel')->with('title',$title);
    }
}
