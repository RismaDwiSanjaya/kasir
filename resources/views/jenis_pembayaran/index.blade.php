@extends('layouts.master')

@section('content')
    <h1>Jenis Pembayaran</h1>

    <a href="{{ route('jenis_pembayaran.create') }}" class="btn btn-primary">Tambah Jenis Pembayaran</a>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3 text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Jenis Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisPembayaran as $jenis)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jenis->nama }}</td>
                    <td>
                        <a href="{{ route('jenis_pembayaran.edit', $jenis->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jenis_pembayaran.destroy', $jenis->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jenis pembayaran ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
