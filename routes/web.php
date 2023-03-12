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
Route::prefix('admin/lab')->name('lab.')->middleware('auth', 'role:admin lab')->group(function () {
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
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::name('auth.')->middleware('guest')->group(function () {

    Route::post('/login', [AuthController::class, 'loginAttempt'])->name('login.post');
    Route::post('/link-reset', [AuthController::class, 'sendResetLinkEmail'])->name('password.link.post');
    Route::post('/update', [AuthController::class, 'resetPassword'])->name('password.update.post');


    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.forgot');
    Route::get('reset/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::get('/login', [AuthController::class, 'login'])->name('login');


    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//auth page





Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('auth.forgot');
})->name('forgot');
Route::get('/reset-password', function () {
    return view('auth.reset');
})->name('reset');
