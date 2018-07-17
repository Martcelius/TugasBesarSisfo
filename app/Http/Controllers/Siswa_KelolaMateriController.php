<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswa_KelolaMateriController extends Controller
{
    //
     public function index()
    {
    	# code...
        $title = 'Kelola Materi';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('siswa/kelolaMateri_indexMateri')->with('title',$title);
    }

}
