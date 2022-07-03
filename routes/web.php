<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

//[HALAMAN UTAMA]
Route::get('/home', 'HomeController@index');
Route::get('/home/detail/{id}', 'DetailController@index');
Route::get('/home/tambah/{id}', 'KeranjangController@tambah');
Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/makanan', 'KategoriController@makanan');
Route::get('/kategori/minuman', 'KategoriController@minuman');
Route::get('/kategori/home/tambah/{id}', 'KeranjangController@tambah');
Route::get('/detail/{id}', 'DetailController@index');
Route::get('/tentang', 'TentangController@index');
Route::get('/keranjang', 'KeranjangController@index');
Route::get('/keranjang/hapus', 'KeranjangController@hapus');
Route::get('/pembayaran', 'PembayaranController@index');
Route::post('/pembayaran/proses', 'PembayaranController@proses');
Route::get('/pembayaran/selesai', 'PembayaranController@selesai');

Route::get('/login', 'LoginHomeController@index')->name('loginUser');
Route::post('/prosesLogin', 'LoginHomeController@postLogin');
Route::get('/prosesLogout', 'LoginHomeController@postLogout');
Route::get('/register', 'RegisterController@index');
Route::post('/register/simpan', 'RegisterController@simpan');

//[HALAMAN ADMIN]
Route::get('/dashboard', 'DashboardController@index');
//barang
Route::get('/barang', 'BarangController@index');
Route::get('/barang/tambah', 'BarangController@tambah');
Route::post('/barang/simpan', 'BarangController@simpan');
Route::get('/barang/hapus/{id_brg}', 'BarangController@hapus');
Route::get('/barang/edit/{id_brg}', 'BarangController@edit');
Route::post('/barang/update', 'BarangController@update');
//invoice
Route::get('/invoice', 'InvoiceController@index');
Route::get('/invoice/detail/{id}', 'InvoiceController@detail');
//login
Route::get('/admin/login', 'LoginController@index')->name('login');
Route::get('/postLogout', 'LoginController@postLogout');
Route::post('/postLogin', 'LoginController@postLogin');