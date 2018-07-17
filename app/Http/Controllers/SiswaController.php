<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
    	# code...
        $title = 'Halaman Siswa';
    	return view('siswa/halamanAwal')->with('title',$title);

    }
}
