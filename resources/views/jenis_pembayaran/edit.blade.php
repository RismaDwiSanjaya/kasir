@extends('layouts.master')

@section('content')
    <h1>Edit Jenis Pembayaran</h1>

    <form action="{{ route('jenis_pembayaran.update', $jenisPembayaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Jenis Pembayaran</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $jenisPembayaran->nama }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection
