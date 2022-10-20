<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksi_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::all();


        return view('transaksi', compact('transaksi'));
    }

}
