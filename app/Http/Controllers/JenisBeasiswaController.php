<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBeasiswa;

class JenisBeasiswaController extends Controller
{
    public function index()
    {
        $jenisBeasiswas = JenisBeasiswa::all();
        return view('jenis_beasiswa.index', compact('jenisBeasiswas'));
    }

    public function create()
    {
        return view('jenis_beasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|unique:jenis_beasiswas,nama',
        ]);

        JenisBeasiswa::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis_beasiswa.index')->with('success', 'Jenis Beasiswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jenisBeasiswa = JenisBeasiswa::findOrFail($id);
        return view('jenis_beasiswa.edit', compact('jenisBeasiswa'));
    }

    public function update(Request $request, $id)
    {
        $jenisBeasiswa = JenisBeasiswa::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|unique:jenis_beasiswas,nama,' . $jenisBeasiswa->id,
        ]);

        $jenisBeasiswa->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis_beasiswa.index')->with('success', 'Jenis Beasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jenisBeasiswa = JenisBeasiswa::findOrFail($id);
        $jenisBeasiswa->delete();

        return redirect()->route('jenis_beasiswa.index')->with('success', 'Jenis Beasiswa berhasil dihapus.');
    }
}
