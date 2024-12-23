@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Siswas</h2>
        <a href="/admin/siswas/create" class="btn btn-warning mb-3">New siswa</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Deasy</td>
                    <td>48213</td>
                    <td>12</td>
                    <td>IPS</td>
                    <td>02-12-2008</td>
                    <td>
                        <a href="/admin/siswas/1" class="btn btn-sm btn-info">Show</a>
                        <a href="/admin/siswas/1/edit" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>Dewi</td>
                    <td>223456</td>
                    <td>12</td>
                    <td>IPA</td>
                    <td>10-11-2008</td>
                    <td>
                        <a href="/admin/siswas/2" class="btn btn-sm btn-info">Show</a>
                        <a href="/admin/siswas/2/edit" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>Rafita</td>
                    <td>123321</td>
                    <td>11</td>
                    <td>IPA</td>
                    <td>01-02-2008</td>
                    <td>
                        <a href="/admin/siswas/3" class="btn btn-sm btn-info">Show</a>
                        <a href="/admin/siswas/3/edit" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection