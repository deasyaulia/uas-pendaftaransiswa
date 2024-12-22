<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_pendaftar'); // Nama pendaftar
            $table->string('email')->unique(); // Email pendaftar
            $table->foreignId('jurusan_id')->constrained('jurusans')->onDelete('cascade'); // Jurusan yang dipilih
            $table->date('tanggal_pendaftaran'); // Tanggal pendaftaran
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
