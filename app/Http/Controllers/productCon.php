<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productCon extends Controller
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

    public function tampil()
    {
        $kategori = kategori::all();

        $data = produk::all()->sortByDesc('jumlahTerjual')->skip(0)->take(8);
        // $data = produk::all();
        // if ($kategori) {
        //     $data = $kategori->produk()->get();
        //     return view('Pages.user.index', compact('produk','kategori'));
        // }else {
        //     return redirect()->back();
        // }
        return view('Pages.user.index', compact('kategori', 'data'));
    }



    public function create()
    {
        $kategori = Kategori::all();

        return view("pages.admin.produk.tambah", compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $jumlahTerjualoto = 0;
        // DB::insert('insert into admins (project, client, status, sekolah_id) values (?,?,?,?)', [$request->project, $request->client, $request->status, $request->sekolah_id]);

        $validator = $request->validate([
            'namaProduk' => 'required|string',
            'hargaProduk' => 'required|integer',
            'deskripsi' => 'required|string',
            'stock' => 'required|integer',
            'jumlahTerjual' => 'jumlahTerjualoto',
            'kategori_id' => 'required'
        ]);
        produk::create($validator);

        return redirect('admin/produk')->with('success', 'Data Berhasil Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $kategori)
    {
        $kategori = Produk::where('kategori_id', $kategori->id)->get();
        $data = Produk::all();
        // dd($data);
        return view('Pages.user.kategori.index', compact('kategori', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::find($id);
        $kategori = Kategori::all();

        return view("pages/admin/produk/edit", [
            'produk' => $produk,
            'kategori' => $kategori,

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
        $data = $request->all();
        $item = produk::findOrFail($id);

        $validator = $request->validate([
            'namaProduk' => 'required|string',
            'hargaProduk' => 'required|integer',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required',
        ]);

        $item->update($validator);
        return redirect()->route('produk.index')->with('success', 'Sukses mengubah siswa.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = produk::find($id);
        $data->delete();

        return redirect('admin/produk')->with('success', 'Data Berhasil Terhapus');
    }
}
