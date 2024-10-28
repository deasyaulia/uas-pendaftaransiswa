@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Siswa</h2>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $siswa->nama }}</h4>
            <p><strong>NISN:</strong> {{ $siswa->nisn }}</p>
            <p><strong>Alamat:</strong> {{ $siswa->alamat }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $siswa->tanggal_lahir }}</p>
            <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
            <p><strong>Jurusan:</strong> {{ $siswa->jurusan }}</p>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
