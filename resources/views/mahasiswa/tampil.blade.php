@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Mahasiswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('mahasiswa.tambah') }}">Tambah Siswa</a>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </tr>
    @foreach($mahasiswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nim }}</td>
        <td>{{ $data->nama }}</td>
        <td>
            <img src="{{ Storage::url($data->foto) }}" alt="Foto {{ $data->nama }}" width="100">
        </td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->hobi }}</td>
        <td>
            <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <br>
            <form action="{{ route('mahasiswa.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Delete</button>
            </form> 
        </td>
    </tr>
    @endforeach
</table>

@endsection