<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPassword;

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
    return view('admin/beranda');
})->name('beranda');

/* @
* Route untuk admin Lab
*/
//BARANG
Route::get('/barang', function () {
    return view('admin/barang');
})->name('barang');
//create barang
Route::get('/barang/create', function () {
    return view('admin/createbarang');
})->name('createbarang');
//action create barang
Route::post('/barang/create', function () {
    return view('admin/createbarang');
})->name('createbarang');
//edit barang
Route::get('/barang/edit/{id}', function ($id) {
    return view('admin/editbarang', ['id' => $id]);
})->name('editbarang');
//action edit barang
Route::post('/barang/edit/{id}', function ($id) {
    return view('admin/editbarang', ['id' => $id]);
})->name('editbarang');
//detail barang dengan parameter
Route::get('/barang/{id}', function ($id) {
    return view('admin/detailbarang', ['id' => $id]);
})->name('detailbarang');

//KATEGORI
Route::get('/kategori', function () {
    return view('admin/kategori');
})->name('kategori');
//create kategori
Route::get('/kategori/create', function () {
    return view('admin/createkategori');
})->name('createkategori');
//action create kategori
Route::post('/kategori/create', function () {
    return view('admin/createkategori');
})->name('createkategori');
//edit kategori
Route::get('/kategori/edit/{id}', function ($id) {
    return view('admin/editkategori', ['id' => $id]);
})->name('editkategori');
//action edit kategori
Route::post('/kategori/edit/{id}', function ($id) {
    return view('admin/editkategori', ['id' => $id]);
})->name('editkategori');


//MODEL BARANG
Route::get('/model', function () {
    return view('admin/model');
})->name('model');
//create model
Route::get('/model/create', function () {
    return view('admin/createmodel');
})->name('createmodel');
//action create model
Route::post('/model/create', function () {
    return view('admin/createmodel');
})->name('createmodel');
//edit model
Route::get('/model/edit/{id}', function ($id) {
    return view('admin/editmodel', ['id' => $id]);
})->name('editmodel');
//action edit model
Route::post('/model/edit/{id}', function ($id) {
    return view('admin/editmodel', ['id' => $id]);
})->name('editmodel');



/*
* Route untuk Superadmin
*/
//LOKASI
Route::get('/lokasi', function () {
    return view('superadmin/lokasi');
})->name('lokasi');
//create lokasi
Route::get('/lokasi/create', function () {
    return view('superadmin/createlokasi');
})->name('createlokasi');
//action create lokasi
Route::post('/lokasi/create', function () {
    return view('superadmin/createlokasi');
})->name('createlokasi');
//edit lokasi
Route::get('/lokasi/edit/{id}', function ($id) {
    return view('superadmin/editlokasi', ['id' => $id]);
})->name('editlokasi');
//action edit lokasi
Route::post('/lokasi/edit/{id}', function ($id) {
    return view('superadmin/editlokasi', ['id' => $id]);
})->name('editlokasi');




Route::get('/forgot-password', [ForgotPassword::class, 'index'])
    ->name('password.request');
Route::post('/forgot-password', [ForgotPassword::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('reset-password/{token}', [ForgotPassword::class, 'showResetPasswordForm'])
    ->name('password.reset');
