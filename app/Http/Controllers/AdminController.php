<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
    	# code...
        $title = 'Halaman Admin';
    	return view('admin/halamanAwal')->with('title',$title);

    }
    
    
}
