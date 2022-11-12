<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $keranjang = Keranjang::where('users_id',$user_id)->get();
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

    //  public function count()
    //  {
    //     //  $user_id = Auth::id();
    //     //  $keranjang = Keranjang::where('users_id',$user_id)->count();
    //     //  return view('', ['keranjang' => $keranjang]);
    //  }

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
        $produk_qty = $request->input('kuantitas');
        $user_id = Auth::id();
        $produk_check = produk::where('id', $produk_id)->first();

        if ($produk_check) {
                $cartItem = new Keranjang();
                $cartItem->produk_id = $produk_id;
                $cartItem->users_id = $user_id;
                $cartItem->kuantitas = $produk_qty;
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
        $keranjang = keranjang::find($id);
        $keranjang->delete();
        return redirect('keranjang')->with('success', 'Sukses menghapus buku');

    }
}
