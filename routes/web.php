<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KategoriController;


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
    Route::resource('ruang', LabController::class);
    Route::resource('sop', SopController::class);
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


Route::prefix('test')->name('test.')->group(function () {
    Route::view('sop/create', 'admin.lab.sop.create')->name('sop.create');
    Route::view('sop/edit', 'admin.lab.sop.edit')->name('sop.edit');
});


Route::prefix('admin/berkas')->name('berkas.')->group(function () {
});


Route::prefix('jurusan')->name('jurusan.')->middleware('auth', 'role:jurusan')->group(function () {
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



//auth page
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('/login', [AuthController::class, 'loginAttempt'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('auth.forgot');
})->name('forgot');
Route::get('/reset-password', function () {
    return view('auth.reset');
})->name('reset');



Route::get('/forgot', [ForgotPassword::class, 'index'])
    ->name('password.request');
Route::post('/forgot-password', [ForgotPassword::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('reset/{token}', [ForgotPassword::class, 'showResetPasswordForm'])
    ->name('password.reset');
