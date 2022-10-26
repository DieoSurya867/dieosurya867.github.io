<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produk::all();
        return view('Pages.admin.produk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil(Request $kategori)
    {
        $kategori = Produk::where('kategori_id', $kategori->id)->get();
        $data = Produk::all();
        // dd($data);
    


        // $kategori = $request->input('kategori');

        // $product = Products::query()
        //     ->where('kategori', $kategori)
        //     ->firstOrFail();

        // $previous = Product::where('kategori', '=', $product->kategori_id)
        // ->where('kategori_id', '<', $product->kategori)
        // -groupBy('kategori_id')

        // -union(
        //     Products::where('kategori', '<', $product->kategori)
        //     ->groupBy('kategori')
        // )->limit(2)->get();

        // return $previous;

            // $kategori_id = POST::groupBy('kategori_id')
            //     ->select(DB::raw('kategori_id'))
            //     ->goupBy('kategori_id')
            //     ->get();
            // return view('Pages.user.index', compact('kategori_id'));

        // $kategori = kategori::get();

        return view('Pages.user.kategori.index', compact('kategori', 'data'));
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
