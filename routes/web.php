<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('guest');

// Registrasi
Route::post('/registrasi', [DashboardController::class, 'registrasi']);

// Login
Route::post('/login', [LoginController::class, 'index']);

// User
Route::get('/user', [LoginController::class, 'user']);

// Admin
// Route::get('/admin', [LoginController::class, 'admin']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Pesan
Route::post('/pesan', [TiketController::class, 'pesan']);

// Route::post('/pesan', 'App\Http\Controllers\TiketController@pesan');

// Admin
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/tiket', [AdminController::class, 'tiket']);
Route::get('/admin/tiket/ubah/{id}', [AdminController::class, 'ubah_tiket']);
Route::post('/admin/tiket/update/{id}', [AdminController::class, 'update_tiket']);
Route::get('/admin/data_tiket/setujui/{id}', [AdminController::class, 'setujui_data_tiket']);
Route::get('/admin/data_tiket/hapus/{id}', [AdminController::class, 'hapus_data_tiket']);

Route::get('/admin/umkm_admin', [AdminController::class, 'umkm_admin']);
Route::get('/admin/umkm_admin/simpan', [AdminController::class, 'simpan_kat_umkm']);
Route::post('/admin/umkm_admin/tambah', [AdminController::class, 'tambah_kat_umkm']);
Route::get('/admin/umkm_admin/ubah/{id}', [AdminController::class, 'ubah_kat_umkm']);
Route::post('/admin/umkm_admin/update/{id}', [AdminController::class, 'update_kat_umkm']);
Route::get('/admin/umkm_admin/hapus/{id}', [AdminController::class, 'hapus_kat_umkm']);

Route::get('/admin/item_umkm_admin', [AdminController::class, 'item_umkm_admin']);
Route::get('/admin/item_umkm_admin/simpan', [AdminController::class, 'simpan_item_umkm']);
Route::post('/admin/item_umkm_admin/tambah', [AdminController::class, 'tambah_item_umkm']);
Route::get('/admin/item_umkm_admin/ubah/{id}', [AdminController::class, 'ubah_item_umkm']);
Route::post('/admin/item_umkm_admin/update/{id}', [AdminController::class, 'update_item_umkm']);
Route::get('/admin/item_umkm_admin/hapus/{id}', [AdminController::class, 'hapus_item_umkm']);

Route::get('/admin/data_pengunjung', [AdminController::class, 'data_pengunjung']);
Route::get('/admin/data_pengunjung/ubah/{id}', [AdminController::class, 'ubah_pengunjung']);
Route::post('/admin/data_pengunjung/update/{id}', [AdminController::class, 'update_pengunjung']);
Route::get('/admin/data_pengunjung/hapus/{id}', [AdminController::class, 'hapus_pengunjung']);

Route::get('/admin/wahana', [AdminController::class, 'wahana']);
Route::get('/admin/wahana/simpan', [AdminController::class, 'simpan_wahana']);
Route::post('/admin/wahana/tambah', [AdminController::class, 'tambah_wahana']);
Route::get('/admin/wahana/ubah/{id}', [AdminController::class, 'ubah_wahana']);
Route::post('/admin/wahana/update/{id}', [AdminController::class, 'update_wahana']);
Route::get('/admin/wahana/hapus/{id}', [AdminController::class, 'hapus_wahana']);

Route::get('/admin/aduan_admin', [AdminController::class, 'aduan_admin']);

Route::get('/aduansaran', 'App\Http\Controllers\AduanController@index');

Route::get('/umkm/{id}', 'App\Http\Controllers\UmkmController@data');


// Route::get('/post', 'PostController@index');

// Route::get('/umkm', function () {
//     return view('/umkm');
// });

// Route::get('/umkmoleh', function () {
//     return view('/umkmoleh');
// });

// Route::get('/sayuran', function () {
//     return view('/sayuran');
// });

// Route::get('/kuliner', function () {
//     return view('/kuliner');
// });

// Route::get('/fashion', function () {
//     return view('/fashion');
// });

// Route::get('/cenderamata', function () {
//     return view('/cenderamata');
// });

// Route::get('/tanaman', function () {
//     return view('/tanaman');
// });