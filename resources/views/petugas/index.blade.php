@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Petugas</h1>
    <a href="{{ route('petugas.create') }}" class="btn btn-primary">Tambah Petugas</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->telepon }}</td>
                <td>{{ $data->alamat }}</td>
                <td>
                    <a href="{{ route('petugas.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('petugas.destroy', $data->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
