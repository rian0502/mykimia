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
Route::prefix('admin')->name('admin.')->group(function () {
    //sudah ada view
    Route::resource('model', ModelController::class);
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
    Route::resource('barang', BarangController::class);

    // Route::resource('history', HistoryController::class)->prefix('barang')->names(
    //     [
    //         'index' => 'barang.history.index',
    //         'create' => 'barang.history.create',
    //         'store' => 'barang.history.store',
    //         'show' => 'barang.history.show',
    //         'edit' => 'barang.history.edit',
    //         'update' => 'barang.history.update',
    //         'destroy' => 'barang.history.destroy',
    //     ]
    // );


    // belum ada view
    // Route::prefix('berkas')->name('berkas')->group(function () {
    //     Route::resource('berkas', BerkasController::class);
    // });

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
Route::post('/lokasi/create',[LokasiController::class, 'store'])->name('createlokasi');
//edit lokasi
Route::get('/lokasi/edit/{id}', function ($id) {
    return view('superadmin.lokasi/editlokasi', ['id' => $id]);
})->name('editlokasi');
//action edit lokasi
Route::post('/lokasi/edit/{id}', function ($id) {
    return view('superadmin.lokasi/editlokasi', ['id' => $id]);
})->name('editlokasi');
//action create lokasi
Route::post('/lokasi/create/action', )->name('createLokasiAction');


Route::get('/forgot-password', [ForgotPassword::class, 'index'])
    ->name('password.request');
Route::post('/forgot-password', [ForgotPassword::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('reset-password/{token}', [ForgotPassword::class, 'showResetPasswordForm'])
    ->name('password.reset');
