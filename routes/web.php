<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPassword;
use App\Models\Kategori;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\ModelController;


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

// ADMIN LAB
Route::prefix('admin/lab')->name('admin.')->group(function () {
    //sudah ada view
    Route::resource('model', ModelController::class);
    Route::resource('kategori', KategoriController::class)->names(
        [
            'index' => 'kategori.index',
            'create' => 'kategori.create',
            'store' => 'kategori.store',
            'show' => 'kategori.show',
            'edit' => 'kategori.edit',
            'update' => 'kategori.update',
            'destroy' => 'kategori.destroy',
        ]
    );
    Route::resource('barang/history', HistoryController::class)->names(
        [
            'index' => 'barang.history.index',
            'create' => 'barang.history.create',
            'store' => 'barang.history.store',
            'show' => 'barang.history.show',
            'edit' => 'barang.history.edit',
            'update' => 'barang.history.update',
            'destroy' => 'barang.history.destroy',
        ]
    );
    Route::resource('barang', BarangController::class)->names(
        [
            'index' => 'barang.index',
            'create' => 'barang.create',
            'store' => 'barang.store',
            'show' => 'barang.show',
            'edit' => 'barang.edit',
            'update' => 'barang.update',
            'destroy' => 'barang.destroy',
        ]
    );
});


Route::prefix('admin/berkas')->name('admin.')->group(function () {
});




Route::prefix('jurusan')->name('jurusan.')->group(function () {

    Route::resource('lokasi', BarangController::class);
});


Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
});


Route::prefix('dosen')->name('dosen.')->group(function () {
});


Route::prefix('koor')->name('koor.')->group(function () {
});







// route FE
Route::get('/', function () {
    return view('index');
});
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');


/*
* Route untuk Prodi
*/
//LOKASI
Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');
//create lokasi
Route::get('/lokasi/create', [LokasiController::class, 'create'])->name('createlokasi');
//action create lokasi
Route::post('/lokasi/create', [LokasiController::class, 'store'])->name('createlokasi');
//edit lokasi

Route::get('/lokasi/edit/{id}', function ($id) {
    return view('jurusan.lokasi/editlokasi', ['id' => $id]);
})->name('editlokasi');
//action edit lokasi
Route::post('/lokasi/edit/{id}', function ($id) {
    return view('jurusan.lokasi/editlokasi', ['id' => $id]);
})->name('editlokasi');




Route::get('/forgot-password', [ForgotPassword::class, 'index'])
    ->name('password.request');
Route::post('/forgot-password', [ForgotPassword::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('reset-password/{token}', [ForgotPassword::class, 'showResetPasswordForm'])
    ->name('password.reset');
