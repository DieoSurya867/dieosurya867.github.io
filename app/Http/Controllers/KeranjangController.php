<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\produk;
use Illuminate\Http\Request;


class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjang = Keranjang::all();
        return view('Pages.user.cart', compact('keranjang'));
    }

    public function tampil()
    {
        $keranjang = keranjang::all();
        return view('Pages.admin.keranjang', compact('keranjang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = produk::all();
        $produk_id = $request->input('produk_id');
        // $produk_qty = $request->input('kuantitas');
        $produk_check = produk::where('id', $produk_id)->first();

        if ($produk_check) {
            $cartItem = new Keranjang();
            $cartItem->produk_id = $produk_id;
            $cartItem->users_id = 1;
            // $cartItem->kuantitas = 1;
            // $cartItem->produk_qty = $produk_qty;
            $cartItem->save();
            return response()->json(['status' => $produk_check->namaProduk . " berhasil tambah ke keranjang"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
