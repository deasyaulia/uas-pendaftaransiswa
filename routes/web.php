<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

//route resource for product
Route::resource('siswa', SiswaController::class);
