<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPassword;
use Illuminate\Http\Request;

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
// route FE
Route::get('/', function () {
    return view('index');
});
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

/* @
* Route untuk admin Lab
*/
//BARANG
Route::get('/barang', function () {
    return view('admin.inventaris.barang.barang');
})->name('barang');
//create barang
Route::get('/barang/create', function () {
    return view('admin.inventaris.barang.createbarang');
})->name('createbarang');
//action create barang
Route::post('/barang/create', function () {
    return view('admin.inventaris.barang.createbarang');
})->name('createbarang');
//edit barang
Route::get('/barang/edit/{id}', function ($id) {
    return view('admin.inventaris.barang.editbarang', ['id' => $id]);
})->name('editbarang');
//action edit barang
Route::post('/barang/edit/{id}', function ($id) {
    return view('admin.inventaris.barang.editbarang', ['id' => $id]);
})->name('editbarang');
//detail barang dengan parameter
Route::get('/barang/{id}', function ($id) {
    return view('admin.inventaris.barang.detailbarang', ['id' => $id]);
})->name('detailbarang');

//action create barang
Route::post('/barang/create/action', function (Request $request) {

    $validatedData = $request->validate([
        'nama_barang' => 'required|max:100',
        'merk' => 'required|max:100',
    ], [
        'nama_barang.required' => 'Nama harus diisi.',
        'nama_barang.max' => 'Nama tidak boleh lebih dari :max karakter.',
        'merk.required' => 'Merek harus diisi.',
        'merk.max' => 'Merek tidak boleh lebih dari :max karakter.',
    ]);

    return redirect()->route('barang');
})->name('createBarangAction');

//KATEGORI
Route::get('/kategori', function () {
    return view('admin.inventaris.kategori.kategori');
})->name('kategori');
//create kategori
Route::get('/kategori/create', function () {
    return view('admin.inventaris.kategori.createkategori');
})->name('createkategori');
//action create kategori
Route::post('/kategori/create', function () {
    return view('admin.inventaris.kategori.createkategori');
})->name('createkategori');
//edit kategori
Route::get('/kategori/edit/{id}', function ($id) {
    return view('admin.kategori.editkategori', ['id' => $id]);
})->name('editkategori');
//action edit kategori
Route::post('/kategori/edit/{id}', function ($id) {
    return view('admin.inventaris.kategori.editkategori', ['id' => $id]);
})->name('editkategori');

//action create kategori
Route::post('/kategori/create/action', function (Request $request) {

    $validatedData = $request->validate([
        'nama_kategori' => 'required|max:100',
        'merk' => 'required|max:100',
    ], [
        'nama_kategori.required' => 'Nama harus diisi.',
        'nama_kategori.max' => 'Nama tidak boleh lebih dari :max karakter.',
        'merk.required' => 'Merek harus diisi.',
        'merk.max' => 'Merek tidak boleh lebih dari :max karakter.',
    ]);

    return redirect()->route('kategori');
})->name('createKategoriAction');


//MODEL BARANG
Route::get('/model', function () {
    return view('admin.inventaris.model.model');
})->name('model');
//create model
Route::get('/model/create', function () {
    return view('admin.inventaris.model.createModel');
})->name('createModel');

//action create model
Route::post('/model/create/action', function (Request $request) {

    $validatedData = $request->validate([
        'nama_model' => 'required|max:100',
        'merk' => 'required|max:100',
    ], [
        'nama_model.required' => 'Nama harus diisi.',
        'nama_model.max' => 'Nama tidak boleh lebih dari :max karakter.',
        'merk.required' => 'Merek harus diisi.',
        'merk.max' => 'Merek tidak boleh lebih dari :max karakter.',
    ]);

    return redirect()->route('model');
})->name('createModelAction');

//edit model
Route::get('/model/edit/{id}', function ($id) {
    return view('admin.inventaris.model/editModel', ['id' => $id]);
})->name('editModel');

//action edit model
Route::post('/model/edit/{id}', function ($id) {
    return view('admin.inventaris.model/editModel', ['id' => $id]);
})->name('editModelAction');



/*
* Route untuk Superadmin
*/
//LOKASI
Route::get('/lokasi', function () {
    return view('superadmin.lokasi/lokasi');
})->name('lokasi');
//create lokasi
Route::get('/lokasi/create', function () {
    return view('superadmin.lokasi/createlokasi');
})->name('createlokasi');
//action create lokasi
Route::post('/lokasi/create', function () {
    return view('superadmin.lokasi/createlokasi');
})->name('createlokasi');
//edit lokasi
Route::get('/lokasi/edit/{id}', function ($id) {
    return view('superadmin.lokasi/editlokasi', ['id' => $id]);
})->name('editlokasi');
//action edit lokasi
Route::post('/lokasi/edit/{id}', function ($id) {
    return view('superadmin.lokasi/editlokasi', ['id' => $id]);
})->name('editlokasi');
//action create lokasi
Route::post('/lokasi/create/action', function (Request $request) {

    $validatedData = $request->validate([
        'nama_lokasi' => 'required|max:100',
        'merk' => 'required|max:100',
    ], [
        'nama_lokasi.required' => 'Nama harus diisi.',
        'nama_lokasi.max' => 'Nama tidak boleh lebih dari :max karakter.',
        'merk.required' => 'Merek harus diisi.',
        'merk.max' => 'Merek tidak boleh lebih dari :max karakter.',
    ]);

    return redirect()->route('model');
})->name('createLokasiAction');




Route::get('/forgot-password', [ForgotPassword::class, 'index'])
    ->name('password.request');
Route::post('/forgot-password', [ForgotPassword::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('reset-password/{token}', [ForgotPassword::class, 'showResetPasswordForm'])
    ->name('password.reset');
