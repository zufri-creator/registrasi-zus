<?php

use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\RawatInapAdminController;
use App\Http\Controllers\RawatinapController;
use App\Http\Controllers\RawatJalanAdmin;
use App\Http\Controllers\RawatJalanAdminController;
use App\Http\Controllers\RawatjalanController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/login/cekuser', [LoginController::class, 'cekUser'])->name('login.cekuser');

Route::get('/registrasi', function(){
    return view('registrasi');
});

Route::get('/pasien', function(){
    return view('pasien.pasien');
});

Route::get('/pasien/logout', [PasienController::class, 'logout'])->name('pasien.logout');
Route::get('/admin/logout',[LoginController::class, 'logout'])->name('admin.logout');
Route::post('/pasien/registrasi', [RegistrasiController::class, 'store'])->name('pasien.registrasi.store');
Route::get('/pasien/layanan/pendaftaran', [PendaftaranController::class, 'create'])->name('layanan.pendaftaran.create');
Route::post('/pasien/layanan/pendaftaran', [PendaftaranController::class, 'store'])->name('layanan.pendaftaran.store');
Route::get('/pasien/layanan/pendaftaran/edit/{id}',[PendaftaranController::class, 'edit'])->name('layanan.pendaftaran.edit');
Route::put('/pasien/layanan/pendaftaran/update/{id}', [PendaftaranController::class, 'update'])->name('layanan.pendaftaran.update');
Route::get('/pasien/layanan/rawatinap/index',[RawatinapController::class, 'index'])->name('layanan.rawatinap.index');
Route::get('/pasien/layanan/rawatinap', [RawatinapController::class, 'create'])->name('layanan.rawatinap.create');
Route::post('/pasien/layanan/rawatinap', [RawatinapController::class, 'store'])->name('layanan.rawatinap.store');
Route::get('/pasien/layanan/rawatinap/show/{id}', [RawatinapController::class, 'show'])->name('layanan.rawatinap.show');
Route::get('/pasien/layanan/rawatinap/edit/{id}', [RawatinapController::class, 'edit'])->name('layanan.rawatinap.edit');
Route::put('/pasien/layanan/rawatinap/update/{id}', [RawatinapController::class, 'update'])->name('layanan.rawatinap.update');
Route::get('/pasien/layanan/rawatjalan/index', [RawatjalanController::class, 'index'])->name('layanan.rawatjalan.index');
Route::get('/pasien/layanan/rawatjalan', [RawatjalanController::class, 'create'])->name('layanan.rawatjalan.create');
Route::post('/pasien/layanan/rawatjalan', [RawatjalanController::class, 'store'])->name('layanan.rawatjalan.store');
Route::get('/pasien/layanan/rawatjalan/show/{id}', [RawatjalanController::class, 'show'])->name('layanan.rawatjalan.show');
Route::get('/pasien/profilpasien', [PasienController::class, 'profilPasien'])->name('pasien.profilpasien');
Route::put('/pasien/profilpasien/update/{id}', [PasienController::class, 'update'])->name('pasien.profilpasien.update');


Route::get('/admin', function(){
    return view('admin.admin');
});
Route::get('/admin/rawatjalan', [RawatJalanAdminController::class, 'index'])->name('admin.rawatjalan.index');
Route::get('/admin/rawatjalan/detail/{id}',[RawatJalanAdminController::class, 'show'])->name('admin.rawatjalan.show');
Route::get('/admin/rawatjalan/proses/{id}',[RawatJalanAdminController::class,'telahDiproses'])->name('admin.rawatjalan.diproses');
Route::get('/admin/rawatjalan/cetaklaporan/{id}', [RawatJalanAdminController::class, 'cetakLaporan'])->name('admin.rawatjalan.cetak');
Route::get('/admin/rawatinap', [RawatInapAdminController::class, 'index'])->name('admin.rawatinap.index');
Route::get('/admin/rawatinap/show/{id}',[RawatInapAdminController::class, 'show'])->name('admin.rawatinap.show');
Route::post('/admin/rawatinap', [RawatInapAdminController::class, 'store'])->name('admin.rawatinap.store');
Route::get('/admin/rawatinap/proses/{id}', [RawatInapAdminController::class, 'telahDiproses'])->name('admin.rawatinap.proses');
Route::get('/admin/rawatinap/cetaklaporan/{id}', [RawatInapAdminController::class, 'cetakLaporan'])->name('admin.rawatinap.cetak');
Route::get('/admin/daftarpasien', [PasienController::class, 'daftarPasien'])->name('admin.daftarpasien');
Route::get('/admin/daftarpasien/detail/{id}', [PasienController::class, 'detailDaftarPasien'])->name('admin.daftarpasien.detail');
Route::post('/admin/kunjungan/store', [KunjunganController::class, 'store'])->name('admin.kunjungan.store');
Route::get('/admin/poli',[PoliController::class, 'index'])->name('admin.poli.index');
Route::post('/admin/poli',[PoliController::class, 'store'])->name('admin.poli.store');
Route::put('/admin/poli/edit/{id}', [PoliController::class, 'update'])->name('admin.poli.update');
Route::delete('/adminn/poli/delete/{id}', [PoliController::class, 'delete'])->name('admin.poli.delete');
