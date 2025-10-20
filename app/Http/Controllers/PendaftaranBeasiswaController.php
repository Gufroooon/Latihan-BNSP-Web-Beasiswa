<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranBeasiswa;
use App\Models\JenisBeasiswa;

class PendaftaranBeasiswaController extends Controller
{
    public function index()
    {
        $data = PendaftaranBeasiswa::all();
        return view('beasiswa.index', compact('data'));
    }

    public function create()
    {
        $jenisBeasiswas = JenisBeasiswa::all();
        $ipk = round(mt_rand(200, 400) / 100, 2); // Random IPK antara 2.00 sampai 4.00
        return view('beasiswa.create', compact('jenisBeasiswas', 'ipk'));
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'semester' => 'required|integer|min:1|max:8',
            'jenis_beasiswa' => 'nullable|string',
            'berkas' => 'nullable|file|mimes:pdf,jpg,zip|max:2048',
        ]);

        // IPK otomatis random
        $ipk = round(mt_rand(200, 400) / 100, 2); // Random IPK antara 2.00 sampai 4.00

        // Simpan data
        $pendaftaran = new PendaftaranBeasiswa();
        $pendaftaran->nama = $request->nama;
        $pendaftaran->email = $request->email;
        $pendaftaran->no_hp = $request->no_hp;
        $pendaftaran->semester = $request->semester;
        $pendaftaran->ipk = $ipk;

        if ($ipk >= 3) {
            $pendaftaran->jenis_beasiswa = $request->jenis_beasiswa;
            if ($request->hasFile('berkas')) {
                $fileName = time() . '_' . $request->file('berkas')->getClientOriginalName();
                $request->file('berkas')->move(public_path('uploads'), $fileName);
                $pendaftaran->berkas = $fileName;
            }
        }

        $pendaftaran->save();

        return redirect()->route('beasiswa.index')->with('success', 'Pendaftaran berhasil disimpan!');
    }

    public function edit($id)
    {
        $pendaftaran = PendaftaranBeasiswa::findOrFail($id);
        $jenisBeasiswas = JenisBeasiswa::all();
        return view('beasiswa.edit', compact('pendaftaran', 'jenisBeasiswas'));
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = PendaftaranBeasiswa::findOrFail($id);

        // Validasi
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'semester' => 'required|integer|min:1|max:8',
            'jenis_beasiswa' => 'nullable|string',
            'berkas' => 'nullable|file|mimes:pdf,jpg,zip|max:2048',
        ]);

        // IPK otomatis random baru
        $ipk = round(mt_rand(200, 400) / 100, 2); // Random IPK antara 2.00 sampai 4.00

        // Update data
        $pendaftaran->nama = $request->nama;
        $pendaftaran->email = $request->email;
        $pendaftaran->no_hp = $request->no_hp;
        $pendaftaran->semester = $request->semester;
        $pendaftaran->ipk = $ipk;

        if ($ipk >= 3) {
            $pendaftaran->jenis_beasiswa = $request->jenis_beasiswa;
            if ($request->hasFile('berkas')) {
                $fileName = time() . '_' . $request->file('berkas')->getClientOriginalName();
                $request->file('berkas')->move(public_path('uploads'), $fileName);
                $pendaftaran->berkas = $fileName;
            }
        } else {
            $pendaftaran->jenis_beasiswa = null;
            $pendaftaran->berkas = null;
        }

        $pendaftaran->save();

        return redirect()->route('beasiswa.index')->with('success', 'Pendaftaran berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pendaftaran = PendaftaranBeasiswa::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('beasiswa.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }
}
