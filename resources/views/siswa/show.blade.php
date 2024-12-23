@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Detail Siswa</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th>NISN</th>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $siswa->kelas }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $siswa->jurusan }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>
        </table>
        <a href="/admin/siswas" class="btn btn-secondary">Back</a>
    </div>
@endsection