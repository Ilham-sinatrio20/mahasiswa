<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa_Matakuliah;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswas', MahasiswaController::class);

Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

