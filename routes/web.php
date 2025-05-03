<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Htpp\Controllers\ListItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ProductController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('praktikum_5');
});

Route::get('/list_produk', [ListProductController::class, 'show']);


Route::get('/slebew', function () {
    return view('gambar');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', function () {
        return 'Admin Users';
    });
});


//Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//  return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

//Produk
Route::get('/produk', function () {
    return view('produk');
});

# Route Kelompok 7 #
// Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route List Item
Route::get('/listitem/{id}/{nama_item}', [ListBarangController::class, 'tampilkan']);

Route::get('/home11', function () {
    return view('pages11/home11');
});

Route::get('/home022', function () {
    return view('pages/home22');
});

Route::get('/home16', function () {
    return view('pages16.home16');
});


Route::get('/product', [ProductController::class,'index']);