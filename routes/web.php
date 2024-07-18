<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\barang;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', isAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('user', UserController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('kategori', KategoriController::class);
});

// Route Admin (Backend)


Route::get('/', function () {
    return view('layouts.backend');
})->middleware('auth')->name('backend');

Route::view('data', 'data')->name('data');

Route::get('/welcome', function () {
    $barang = barang::all();
    return view('welcome', compact('barang'));
})->name('welcome');

Route::get('/detail/{id}', [DetailController::class, 'tampilkan'])->name('detail');

Route::get('/produk', function () {
    $barang = barang::all();
    return view('layouts.produk', compact('barang'));
})->name('layouts.produk');

Route::get('/', function () {
    $barang = \App\Models\Barang::all(); // Corrected model namespace
    return view('welcome', compact('barang'));
})->name('welcome');

Route::resource('kategori', KategoriController::class);
Route::get('/filter', [BarangController::class, 'filter'])->name('filter');

// Route untuk menampilkan halaman profil
Route::get('layouts.profile', [ProfileController::class, 'show'])->name('profile');

// Route::get('cart', [CartController::class, 'show'])->name('cart');

// Route untuk mengupdate profil
Route::post('layouts.profile', [ProfileController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart//delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
