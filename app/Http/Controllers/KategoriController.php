<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\POST;
use App\Models\produk;
use File;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('Pages.admin.kategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('Pages.admin.kategori.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'namaKategori' => 'required|string',
            'foto' => 'required|image|max:10000|mimes:png,jpg',

        ]);

        $file = $request->file('foto')->store('img');

        // Upload::create([
        //     'image' => $file
        // ]);
        $validator['foto'] = $file;
        Kategori::create($validator);
        return redirect('admin/kategori')->with('success', 'Data Berhasil Terupload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = produk::where('kategori_id', $id)->get();
        $data = Produk::all();
        $semua = Kategori::all();
        // dd($data);
        return view('Pages.user.kategori.index', compact('kategori', 'data','semua'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilSemua()
    {
        $kategori = kategori::all();
        $data = Produk::all();
        return view('Pages.user.kategori.all', compact('kategori','data'));
    }


    public function edit($id)
    {

        $kategori = Kategori::findOrFail($id);

        return view("pages/admin/kategori/edit", [
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

        $kategori = Kategori::findOrFail($id);
        $validator = $request->validate([
            'namaKategori' => 'required|string'
        ]);

        $kategori->update($validator);

        if ($request->file('foto')) {
            $file = $request->file('foto')->store('img');

            $kategori->update([

                'foto' => $file,
            ]);
        } else {
            return redirect('admin/kategori')->with('error', 'Tidak Ada Yng Berubah');
        }
        return redirect('admin/kategori')->with('success', 'Data Berhasil Diubah');

        // if ($request->file('foto')) {
        //     $file = $request->file('foto')->store('img');
        //     $kategori->update($data);
        //     $kategori->update([
        //         'foto' => $file
        //     ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori, $id)
    {
        // delete image
        Storage::delete('storage/' . $kategori->foto);

        //delete post
        $kategori->delete();

        // hapus file
        // Storage::delete('public/storage/img/' . $gambar->file);

        // hapus data
        Kategori::where('id', $id)->delete();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Terhapus');
    }
}
