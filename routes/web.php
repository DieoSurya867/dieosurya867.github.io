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


Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('login', HomeController::class);
});

Route::get('/', [productCon::class, 'tampil']);
Route::get('/user/kategori/{id}', [productCon::class, 'show']);

Route::get('user/cart', function () {
    return view('Pages.user.cart');
});
Route::get('user/check', function () {
    return view('Pages.user.checkout');
});

Route::get('user/detail/{id}', [productCon::class, 'detail']);

Route::get('admin/user', function () {
    return view('users');
});

Route::get('admin/user', function () {
    return view('users');
});

Route::resource('admin/produk', productCon::class);
Route::get('deleteproduk/{id}', [productCon::class, 'destroy'])->name('deleteproduk');

Route::get('deleteproduk/{id}', [produkCon::class, 'destroy'])->name('deleteproduk');
Route::resource('admin/users',UsersController::class);
Route::resource('admin/transaksi',TransaksiController::class);
Route::resource('admin/dashboard',AdminController::class);


// =======
Route::get('deleteproduk/{id}', [productCon::class, 'destroy'])->name('deleteproduk');
// >>>>>>> ab769fceeaafe23b05ad843b6bf30b3b4638f23e

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
