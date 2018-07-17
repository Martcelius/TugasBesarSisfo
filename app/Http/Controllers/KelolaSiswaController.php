<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class KelolaSiswaController extends Controller
{
    //
    public function index()
    {
		$title = 'Halaman Admin';
    	$siswas = Siswa::orderBy('nis','ASC')->paginate(10);
    	return view('admin/kelolaSiswa', compact('siswas','title'));
	}
    
    public function create(){
    	$title = 'Tambah Siswa';
    	return view('admin/addSiswa')->with('title',$title);
    }

    public function store(Request $request){
      $this->validate($request, [
      'nama' => 'required',
      'password' => 'required',
      'kelas' => 'required'
	]);
       $tambah = new Siswa();
     $tambah->nama = $request['nama'];
     $tambah->password = $request['password'];
     $tambah->kelas = $request['kelas'];
     $tambah->save();
     return redirect()->to('/kelolasiswa');
 }

 public function edit($nis)
    { 

        $varedit = Siswa::where('nis', $nis)->first();
        $title = 'Edit siswa '.$nis;
        return view('admin/editSiswa', compact('varedit', 'title'));
    }

 public function update(Request $request, $nis)
    {
        $update = Siswa::where('nis', $nis)->first();
        $update->nama = $request['nama'];
        $update->password = $request['password'];
        $update->update();

        return redirect()->to('/kelolasiswa');
    }

    public function destroy($nis)
    {
        $hapus = Siswa::find($nis);
        $hapus->delete();

        return redirect()->to('/kelolasiswa');
    }
}
