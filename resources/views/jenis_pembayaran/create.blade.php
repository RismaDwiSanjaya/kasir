@extends('layouts.master')

@section('content')
    <h1>Tambah Jenis Pembayaran</h1>

    <form action="{{ route('jenis_pembayaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Jenis Pembayaran</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
@endsection
