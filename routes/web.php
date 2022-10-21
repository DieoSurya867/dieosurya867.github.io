<?php

use App\Http\Controllers\productCon;

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

// Route::get('/', function () {
//     return view('pages.user.index');
// });
// Route::get('/', [App\Http\Controllers\productCon::class, 'tampil']);

Route::get('admin/dasboard', function () {
    return view('pages.admin.home');
});

<<<<<<< HEAD
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('login', HomeController::class);
});
=======
Route::get('/', [productCon::class, 'tampil']);
>>>>>>> fd25fab40dd8798b0937d1cd2114cd6d2ff01046

Route::get('admin/dashboard', function () {
    return view('Pages.admin.home');
});
Route::get('user/cart', function () {
    return view('Pages.user.cart');
});
Route::get('user/check', function () {
    return view('Pages.user.checkout');
});
Route::get('user/detail', function () {
    return view('Pages.user.detail');
});

Route::get('admin/user', function () {
    return view('users');
});


Route::resource('admin/produk', productCon::class);
Route::get('deleteproduk/{id}', [produkCon::class, 'destroy'])->name('deleteproduk');
Route::get('edit', [productCon::class, 'edit']);
Route::get('/users','UsersController@index');
Route::get('/transaksi','TransaksiController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
