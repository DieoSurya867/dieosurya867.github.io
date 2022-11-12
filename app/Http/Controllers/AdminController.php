<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\User;
use App\Models\produk;
use App\Models\customer;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        $produkcount = produk::count();
        $usercount = User::count();
        $transaksicount = transaksi::count();
        $kategori = kategori::count();
        $transaksi = transaksi::all()->sortByDesc('created_at')->skip(0)->take(5);
        return view ('Pages.admin.home', ['produk_count' => $produkcount, 'user_count' => $usercount, 'transaksi_count' => $transaksicount, 'kategori' => $kategori, 'transaksi'=> $transaksi] );
    }
}
