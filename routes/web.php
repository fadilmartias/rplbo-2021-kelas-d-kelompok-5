<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LacakSuratController;
use App\Http\Controllers\PengajuanLegalisirController;
use App\Http\Controllers\PengajuanSuratKeluarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Pengajuan Legalisir
Route::get('/PengajuanLegalisir', [PengajuanLegalisirController::class, 'index'])->name('pengajuanlegalisir.index');
Route::put('/PengajuanLegalisir/acc/{id}', [PengajuanLegalisirController::class, 'accLegalisir'])->name('acc.Legalisir');
Route::put('/PengajuanLegalisir/reject/{id}', [PengajuanLegalisirController::class, 'rejectLegalisir'])->name('reject.Legalisir');
Route::put('/PengajuanLegalisir/complete/{id}', [PengajuanLegalisirController::class, 'completeLegalisir'])->name('legalisir.complete');

//kelola user
Route::get('/HalamanPengelolaUser', [UserController::class , 'index'])->name('user.index');
Route::get('/TambahUser', [UserController::class , 'add'])->name('add.user');
Route::post('/TambahUser', [UserController::class , 'tambah'])->name('tambah.user');
Route::get('/EditUser/{id}', [UserController::class , 'edit'])->name('edit.user');
Route::put('/UpdateUser/{id}', [UserController::class , 'update'])->name('update.user');
Route::delete('/HapusUser/{id}', [UserController::class, 'destroy'])->name('hapus.user');

// Pengajuan Surat
Route::get('/PengajuanSuratKeluar', [PengajuanSuratKeluarController::class, 'index'])->name('pengajuansurat.index');
Route::put('/PengajuanSuratKeluar/acc/{id}', [PengajuanSuratKeluarController::class, 'accSurat'])->name('acc.Surat');
Route::put('/PengajuanSuratKeluar/reject/{id}', [PengajuanSuratKeluarController::class, 'rejectSurat'])->name('reject.Surat');
Route::put('/PengajuanSuratKeluar/complete/{id}', [PengajuanSuratKeluarController::class, 'completeSurat'])->name('surat.complete');

});

Route::get('/', function () {
    return view('home');
});

require __DIR__.'/auth.php';

 // Ajukan Surat
 Route::get('/AjukanSuratKeluar', [PengajuanSuratKeluarController::class, 'create'])->name('ajukan-surat.create');
 Route::post('/MengajukanSuratKeluar', [PengajuanSuratKeluarController::class, 'store'])->name('ajukan-surat.store');

 // Ajukan Legalisir
 Route::get('/AjukanLegalisir', [PengajuanLegalisirController::class, 'create'])->name('ajukan-legalisir.create');
 Route::post('/MengajukanLegalisir', [PengajuanLegalisirController::class, 'store'])->name('ajukan-legalisir.store');

 //Lacak Surat
 Route::get('/LacakSurat', [LacakSuratController::class, 'create'])->name('lacak.create');
 Route::post('/MelacakSurat', [LacakSuratController::class, 'store'])->name('lacak.store');
 Route::get('/HasilLacak', [LacakSuratController::class, 'index'])->name('hasil.index');

