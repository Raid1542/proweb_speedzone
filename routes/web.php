<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Htpp\Controllers\ListItemController;
use App\Http\Controllers\DashboardController;
>>>>>>> 3c39dd28e9fd9e27973d7b37ad9f5909c5d6235d

Route::get('/', function () {
    return view('praktikum_5');
});

Route::get('/welcome', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/reset-password', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'updatePassword'])->name('password.update');

Route::get('/slebew', function () {
    return view('gambar');
});
=======
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

# Route Kelompok 7 #
// Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route Dashboard
Route::get('dashboard/{nama}/{warna}/{harga}/{stok}', [DashboardController::class , 'dashboard']);

// Route List Item
Route::get('/listitem/{id}/{nama_item}', [ListBarangController::class, 'tampilkan']);

>>>>>>> 3c39dd28e9fd9e27973d7b37ad9f5909c5d6235d
