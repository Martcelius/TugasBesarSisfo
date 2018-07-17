<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;

class GuruController extends Controller
{
    //
    public function index()
    {
    	# code...
        $testnip = 10001;
        $guru = Employee::find($testnip);
        #dd($guru);
        Session::push('nip',$guru);
        //echo Session::get($guru->'nip');
        $title = 'Halaman Guru';
        return view('guru/halamanAwal')->with('title',$title);
    }

}