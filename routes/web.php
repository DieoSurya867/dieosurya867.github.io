<?php

use App\Http\Controllers\productCon;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\produkCon;
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

Route::resource('admin/produk', productCon::class);
Route::resource('admin/users', UsersController::class);
Route::resource('admin/transaksi', TransaksiController::class);
Route::get('deleteproduk/{id}', [produkCon::class, 'destroy'])->name('deleteproduk');


// =======
Route::get('deleteproduk/{id}', [productCon::class, 'destroy'])->name('deleteproduk');
// >>>>>>> ab769fceeaafe23b05ad843b6bf30b3b4638f23e

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi');

