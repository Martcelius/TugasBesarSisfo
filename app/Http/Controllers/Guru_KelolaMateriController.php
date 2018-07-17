<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Guru_KelolaMateriController extends Controller
{
    //
    public function index()
    {
    	# code...
        $title = 'Kelola Materi';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('guru/kelolaMateri_indexMateri')->with('title',$title);
    }

    public function showUpload()
    {
    	# code...
        $title = 'Kelola Materi';
    	//return view('guru/halamanAwal')->with('title',$title);
        return view('guru/kelolaMateri_addMateri')->with('title',$title);
    }
}
