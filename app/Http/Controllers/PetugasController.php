<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Add this for logging

class PetugasController extends Controller
{
    // Menampilkan daftar semua data petugas
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    // Menampilkan halaman form tambah petugas
    public function create()
    {
        return view('petugas.create');
    }

    // Menyimpan data petugas baru ke dalam database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:petugas,email',
            'telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
        ]);

        try {
            // Membuat data petugas baru
            Petugas::create($request->all());

            return redirect()->route('petugas.index')
                             ->with('success', 'Data petugas berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error adding petugas: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->route('petugas.index')
                             ->with('error', 'Gagal menambahkan data petugas.');
        }
    }

    // Menampilkan data petugas tertentu
    public function show(Petugas $petugas)
    {
        return view('petugas.show', compact('petugas'));
    }

    // Menampilkan form edit data petugas
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id); // Ambil data petugas berdasarkan ID
        return view('petugas.edit', compact('petugas')); // Kirim ke view
    }

    // Memperbarui data petugas yang sudah ada
    public function update(Request $request, Petugas $petugas)
    {
        // Validasi data input dengan pengecualian untuk email yang sama pada ID saat ini
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:petugas,email,' . $petugas->id,
            'telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
        ]);

        try {
            // Memperbarui data petugas
            $petugas->update($request->all());

            return redirect()->route('petugas.index')->with('success', 'Data petugas berhasil diperbarui.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error updating petugas: ' . $e->getMessage());

            // Redirect with error message
            return back()->with('error', 'Gagal memperbarui data petugas.');
        }
    }

    // Menghapus data petugas
    public function destroy($id)
    {
        try {
            $petugas = Petugas::findOrFail($id);
            $petugas->delete();

            return redirect()->route('petugas.index')->with('success', 'Petugas berhasil dihapus');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error deleting petugas: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->route('petugas.index')->with('error', 'Gagal menghapus petugas.');
        }
    }
}
