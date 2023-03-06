<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPassword;
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
Route::prefix('admin/lab')->name('lab.')->group(function () {
    Route::resource('model', ModelController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('kategori', KategoriController::class);
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
});


Route::prefix('admin/berkas')->name('berkas.')->group(function () {
});


Route::prefix('jurusan')->name('jurusan.')->group(function () {
    Route::resource('lokasi', LokasiController::class);
});


Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
});


Route::prefix('dosen')->name('dosen.')->group(function () {
});


Route::prefix('koor')->name('koor.')->group(function () {
});



// route FE

// CONTOH
Route::prefix('fe')->name('fe')->group(function () {
    Route::get('kategori/create', function () {
        return view('admin.inventaris.kategori.create');
    })->name('admin.kategori.create');

});





Route::get('/', function () {
    return view('index');
});
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');



Route::get('/forgot-password', [ForgotPassword::class, 'index'])
    ->name('password.request');
Route::post('/forgot-password', [ForgotPassword::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('reset-password/{token}', [ForgotPassword::class, 'showResetPasswordForm'])
    ->name('password.reset');
