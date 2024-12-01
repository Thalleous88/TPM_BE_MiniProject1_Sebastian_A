@extends('layout')

@section('konten')

<h4>Edit Mahasiswa</h4>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>NIM</label>
    <input type="number" name="nim" value="{{ $mahasiswa->nim }}" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control mb-2">
    <label>Foto</label>
    <div class="mb-2">
        @if($mahasiswa->foto)
            <img src="{{ Storage::url($mahasiswa->foto) }}" alt="Foto {{ $mahasiswa->nama }}" width="100">
        @else
            <p>Tidak ada foto</p>
        @endif
    </div>
    <input type="file" name="foto" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}" class="form-control mb-2">
    <label>No HP</label>
    <input type="text" name="no_hp" value="{{ $mahasiswa->no_hp }}" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $mahasiswa->jenis_kelamin }}" class="form-control mb-2">
    <label>Hobi</label>
    <input type="text" name="hobi" value="{{ $mahasiswa->hobi }}" class="form-control mb-2">

    <button class="btn btn-primary"> Edit </button>
</form>

@if ($errors->any()) 
    <div class="w-4/8 m-auto text-center">
        @foreach ($errors->all() as $error)
            <li class="text-red-500 list-none" style="color: red;">
                {{ $error }}
            </li>
        @endforeach
    </div>
@endif

@endsection