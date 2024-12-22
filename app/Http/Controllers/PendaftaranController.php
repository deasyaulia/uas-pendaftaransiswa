<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::with(['siswa', 'jurusan'])->get();
        return view('pendaftaran.index', compact('pendaftarans'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $jurusans = Jurusan::all();
        return view('pendaftaran.create', compact('siswas', 'jurusans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'jurusan_id' => 'required|exists:jurusans,id',
            'tanggal_daftar' => 'required|date',
            'status' => 'required|string|in:pending,diterima,ditolak',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil ditambahkan.');
    }

    public function show(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.show', compact('pendaftaran'));
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        $siswas = Siswa::all();
        $jurusans = Jurusan::all();
        return view('pendaftaran.edit', compact('pendaftaran', 'siswas', 'jurusans'));
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'jurusan_id' => 'required|exists:jurusans,id',
            'tanggal_daftar' => 'required|date',
            'status' => 'required|string|in:pending,diterima,ditolak',
        ]);

        $pendaftaran->update($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
