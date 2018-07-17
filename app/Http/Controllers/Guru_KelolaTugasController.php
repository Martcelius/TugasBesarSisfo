<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Guru_KelolaTugasController extends Controller
{
    //
     public function index()
    {
    	# code...
        $title = 'Kelola Tugas';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('guru/kelolaTugas_indexTugas')->with('title',$title);
    }
     public function showUpload()
    {
    	# code...
        $title = 'Tambah Tugas';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('guru/kelolaTugas_addTugas')->with('title',$title);
    }
}
