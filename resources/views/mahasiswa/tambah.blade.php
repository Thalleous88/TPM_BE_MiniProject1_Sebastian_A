@extends('layout')

@section('konten')

<h4>Tambah Mahasiswa</h4>

<form action="{{ route('mahasiswa.submit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>NIM</label>
    <input type="number" name="nim" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Foto</label>
    <input type="file" name="foto" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>No HP</label>
    <input type="text" name="no_hp" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2">
    <label>Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2">

    <button class="btn btn-primary"> Tambah </button>
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