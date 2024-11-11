<?php

namespace App\Http\Controllers;

use App\Models\JenisPembayaran;
use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    // Menampilkan daftar jenis pembayaran
    public function index()
    {
        $jenisPembayaran = JenisPembayaran::all();
        return view('jenis_pembayaran.index', compact('jenisPembayaran'));
    }

    // Menampilkan form untuk menambah jenis pembayaran
    public function create()
    {
        return view('jenis_pembayaran.create');
    }

    // Menyimpan jenis pembayaran baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        JenisPembayaran::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis_pembayaran.index')->with('success', 'Jenis Pembayaran berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit jenis pembayaran
    public function edit(JenisPembayaran $jenisPembayaran)
    {
        return view('jenis_pembayaran.edit', compact('jenisPembayaran'));
    }

    // Memperbarui jenis pembayaran
    public function update(Request $request, JenisPembayaran $jenisPembayaran)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $jenisPembayaran->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis_pembayaran.index')->with('success', 'Jenis Pembayaran berhasil diperbarui.');
    }

    // Menghapus jenis pembayaran
    public function destroy(JenisPembayaran $jenisPembayaran)
    {
        $jenisPembayaran->delete();
        return redirect()->route('jenis_pembayaran.index')->with('success', 'Jenis Pembayaran berhasil dihapus.');
    }
}
