<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksi_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;

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
        return view('Pages.admin.transaksi', compact('transaksi'));
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = transaksi::findOrFail($id);

        return view("pages.admin.edit", [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data2 = $request->all();
        $item = transaksi::findOrFail($id);

        $validator = $request->validate([
            'namaProduk' => 'required|string',
            'hargaProduk' => 'required|integer',
            'deskripsi' => 'required|string',
            'stock' => 'required|integer',
            'jumlahTerjual' => 'required|integer',
            'kategori_id' => 'required',
        ]);

        $item->update($validator);
        return redirect()->route('produk.index');
    }
}    
