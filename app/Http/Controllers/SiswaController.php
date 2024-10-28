<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswas',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan');
    }
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:siswas, nisn,' . $siswa->id,
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with(['success', 'Data siswa berhasil dihapus']);
    }
}

