@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Mahasiswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('mahasiswa.tambah') }}">Tambah Siswa</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
    </tr>
    @foreach($mahasiswa as $no=>$data)
    <tr>
        <th>{{ $no+1 }}</th>
        <th>{{ $data->nim }}</th>
        <th>{{ $data->nama }}</th>
        <th>{{ $data->alamat }}</th>
        <th>{{ $data->no_hp }}</th>
        <th>{{ $data->jenis_kelamin }}</th>
        <th>{{ $data->hobi }}</th>
    </tr>
    @endforeach
</table>

@endsection