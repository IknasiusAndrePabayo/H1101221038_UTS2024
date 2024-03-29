<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MasterJabatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

Route::get('/', function () {
    return view('main');
});

Route::get('/beranda', [BerandaController::class, 'show'])->name('showBeranda');
Route::get('/tambah-data-pegawai', [PegawaiController::class, 'tambahData'])->name('tambahDataPegawai');

Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/master-jabatan', [MasterJabatanController::class, 'show'])->name('showMasterJabatan');

