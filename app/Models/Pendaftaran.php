<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_pendaftar',
        'email',
        'jurusan',
        'tanggal_pendaftaran', // Tambahkan field lainnya sesuai tabel
    ];
}
