<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Employee;

class KelolaGuruController extends Controller
{
    //
    public function index()
    {
    	$title = 'Halaman Admin';
    	$guruguru = Employee::orderBy('nip','ASC')->paginate(10);
    	return view('admin/kelolaGuru', compact('guruguru','title'));
    }
    public function create(){
    	$title = 'Tambah Guru';
    	return view('admin/addGuru')->with('title',$title);
    }

    public function store(Request $request){
      $this->validate($request, [
      'nama' => 'required',
      'password' => 'required',
      'mapel' => 'required'
	]);

     $tambah = new Employee();
     $tambah->nama = $request['nama'];
     $tambah->password = $request['password'];
     $tambah->mapel = $request['mapel'];
     $tambah->status = 'guru';
     $tambah->save();

     return redirect()->to('/kelolaguru');
    }

    public function edit($nip)
    {	

        $varedit = Employee::where('nip', $nip)->first();
        $title = 'Edit guru '.$nip;
        return view('admin/editGuru', compact('varedit', 'title'));
    }
    public function update(Request $request, $nip)
    {
        $update = Employee::where('nip', $nip)->first();
        $update->nama = $request['nama'];
        $update->password = $request['password'];
        $update->update();

        return redirect()->to('/kelolaguru');
    }

    public function destroy($nip)
    {
        $hapus = Employee::find($nip);
        $hapus->delete();

        return redirect()->to('/kelolaguru');
    }
    
}
