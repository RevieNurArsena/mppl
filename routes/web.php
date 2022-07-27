<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\UserController;

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


Route::get('/admin/login-admin', function () {
    return view('admin.login-admin', [
        'judul' => 'login admin'
    ]);
});
Route::post('/admin/login', [AdminController::class, 'prosesLogin']);

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    // Produk
    Route::get('/admin/produk', [produkController::class, 'index']);
    Route::post('/admin/tambah-produk', [produkController::class, 'store']);
    Route::get('/admin/hapus-produk/{id}', [produkController::class, 'destroy']);
    Route::get('/admin/edit-produk/{id}', [produkController::class, 'edit']);
    Route::post('/admin/update-produk', [produkController::class, 'update']);

    // Kategori
    Route::get('/admin/kategori', [kategoriController::class, 'index']);
    Route::post('/admin/tambah-kategori', [kategoriController::class, 'store']);
    Route::get('/admin/hapus-kategori/{id}', [kategoriController::class, 'destroy']);
    Route::get('/admin/edit-kategori/{id}', [kategoriController::class, 'edit']);
    Route::post('/admin/update-kategori', [kategoriController::class, 'update']);

    Route::get('/admin/order', [transaksiController::class, 'index']);
    Route::post('/admin/update-status', [transaksiController::class, 'update']);

    Route::get('/admin/logout', [AdminController::class, 'logout']);
});

//user
Route::get('/', [userController::class, 'index2'])->middleware('guest');

Route::get('/login', function () {
    return view('user.login', [
        'judul' => 'login'
    ]);
})->middleware('guest');

Route::get('/register', function () {
    return view('user.register', [
        'judul' => 'login'
    ]);
})->middleware('guest');

Route::post('/login-user', [userController::class, 'prosesLogin']);
Route::post('/register-user', [userController::class, 'prosesRegister']);
Route::get('/logout', [userController::class, 'logout']);

Route::middleware(['auth:user'])->group(function () {

    Route::get('/home', [userController::class, 'index']);
    Route::post('/detail-produk', [userController::class, 'viewProduk']);
    Route::post('/pesan-produk', [userController::class, 'pesan']);

    Route::get('/pesanan', function () {
        return view('user.halaman-pesanan', [
            'judul' => 'pesanan'
        ]);
    });

    Route::post('/buat-pesanan', [userController::class, 'buatPesanan']);
    Route::post('/history-belanja', [userController::class, 'history']);

    Route::get('/produk', function () {
        return view('user.lihat-produk', [
            'judul' => 'produk'
        ]);
    });
});
