<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama; 
        $mahasiswa->alamat = $request->alamat; 
        $mahasiswa->no_hp = $request->no_hp; 
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin; 
        $mahasiswa->hobi = $request->hobi;  

        if ($request->hasFile('foto')) {
            $filePath = $request->file('foto')->store('foto_mahasiswa', 'public'); 
            $mahasiswa->foto = $filePath; 
        }

        $mahasiswa->save();

        return redirect()->route('mahasiswa.tampil');
    }

    function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    function update(Request $request, $id) {
        $request->validate([
            'nim' => 'required|digits:10',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama; 
        $mahasiswa->alamat = $request->alamat; 
        $mahasiswa->no_hp = $request->no_hp; 
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin; 
        $mahasiswa->hobi = $request->hobi;  

        if ($request->hasFile('foto')) {
            if ($mahasiswa->foto && Storage::exists($mahasiswa->foto)) {
                Storage::delete($mahasiswa->foto);
            }

            $filePath = $request->file('foto')->store('foto_mahasiswa', 'public');
            $mahasiswa->foto = $filePath;
        }

        $mahasiswa->update();

        return redirect()->route('mahasiswa.tampil');
    }

    function delete($id) {
        $mahasiswa = Mahasiswa::find($id);

        if ($mahasiswa->foto && Storage::exists($mahasiswa->foto)) {
            Storage::delete($mahasiswa->foto);
        }

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.tampil');
    }
}
