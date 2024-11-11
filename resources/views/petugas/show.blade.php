@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Petugas</h2>
    
    <div class="mb-3">
        <strong>Nama:</strong> {{ $petugas->nama }}
    </div>
    <div class="mb-3">
        <strong>Email:</strong> {{ $petugas->email }}
    </div>
    <div class="mb-3">
        <strong>Telepon:</strong> {{ $petugas->telepon }}
    </div>
    <div class="mb-3">
        <strong>Alamat:</strong> {{ $petugas->alamat }}
    </div>
    
    <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
