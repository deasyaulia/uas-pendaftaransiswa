<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('front.index');
});

Route::resource('jurusan', JurusanController::class);

Route::resource('profile', ProfileController::class);

Route::resource('pendaftaran', PendaftaranController::class);

Route::resource('siswa', SiswaController::class);
