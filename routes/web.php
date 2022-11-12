<?php

use App\Http\Controllers\FotoController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productCon;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\produkCon;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\Admin;

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KeranjangController;

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

Route::get('/', [productCon::class, 'tampil']);

Route::middleware('auth')->group(function () {
    Route::resource('admin/users', UsersController::class);
    Route::resource('admin/transaksi', TransaksiController::class);
    Route::resource('admin/dashboard', AdminController::class);
    Route::resource('admin/produk', productCon::class);
    Route::resource('admin/galeri', GaleriController::class);
    Route::get('deleteproduk/{id}', [productCon::class, 'destroy'])->name('deleteproduk');
    Route::get('deletekategori/{id}', [KategoriController::class, 'destroy'])->name('deletekategori');
    Route::get('deletegaleri/{id}', [GaleriController::class, 'destroy'])->name('deletegaleri');

    // });

    // Route::middleware('auth')->group(function () {
    Route::resource('admin/kategori', KategoriController::class);
    Route::resource('keranjang', KeranjangController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('checkout', CheckoutController::class);
    Route::get('midtrans', [CheckoutController::class, 'midtrans']);
    Route::post('bayar', [CheckoutController::class, 'process'])->name('bayar');
    Route::get('wilayah', [CheckoutController::class, 'wilayah'])->name('home');
});


Route::resource('detail', DetailController::class);
Auth::routes();
Route::get('midtrans', [TransaksiController::class, 'midtrans']);
Route::get('json', function () {
    return view('json');
});
