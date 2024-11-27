<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function tampil() {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.tampil', compact('mahasiswa'));
    }

    function tambah() {
        return view('mahasiswa.tambah');
    }

    public function submit(Request $request) {

        $request->validate([
            'nim' => 'required|digits:10',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama; 
        $mahasiswa->alamat = $request->alamat; 
        $mahasiswa->no_hp = $request->no_hp; 
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin; 
        $mahasiswa->hobi = $request->hobi;  
        $mahasiswa->save();

        return redirect()->route('mahasiswa.tampil');
    }
}
