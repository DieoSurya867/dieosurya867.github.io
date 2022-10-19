<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksi_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$transaksi = DB::table('transaksi')->get();
 
    	// mengirim data pegawai ke view index
    	return view('transaksi',['transaksi' => $transaksi]);
 
    }
}
