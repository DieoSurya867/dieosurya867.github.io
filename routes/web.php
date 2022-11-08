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

Route::get('/', function () {
    return view('pages.user.index');
});

Route::get('admin/dashboard', function () {
    return view('Pages.admin.home');
});

Route::get('admin/user', function () {
    return view('users');
});


Route::resource('admin/produk', productCon::class);
<<<<<<<<< Temporary merge branch 1
Route::get('deleteproduk/{id}', [productCon::class, 'destroy'])->name('deleteproduk');
=========
Route::get('deleteproduk/{id}', [produkCon::class, 'destroy'])->name('deleteproduk');
Route::get('admin/users',UsersController::class);
Route::get('admin/transaksi',TransaksiController::class);
Route::get('admin/dashboard',AdminController::class);


// =======
Route::get('deleteproduk/{id}', [productCon::class, 'destroy'])->name('deleteproduk');
// >>>>>>> ab769fceeaafe23b05ad843b6bf30b3b4638f23e

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
