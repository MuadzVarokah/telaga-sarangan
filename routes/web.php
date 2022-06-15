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
Route::get('/admin/wahana', [AdminController::class, 'wahana']);
Route::get('/admin/umkm_admin', [AdminController::class, 'umkm_admin']);

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