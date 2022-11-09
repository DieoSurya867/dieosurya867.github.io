<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('Pages.admin.galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = produk::all();
        return view('Pages.admin.galeri.tambah', compact('produk'));
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
            'produk_id' => 'required',
            'fotoProdukPertama' => 'required|image|max:10000|mimes:png,jpg',

        ]);

        $file = $request->file('fotoProdukPertama')->store('img');

        // Upload::create([
        //     'image' => $file
        // ]);
        $validator['fotoProdukPertama'] = $file;
        Galeri::create($validator);
        return redirect('admin/galeri')->with('success', 'Data Berhasil Terupload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        $produk = produk::all();

        return view("pages/admin/galeri/edit", [
            'galeri' => $galeri,
            'produk' => $produk,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $validator = $request->validate([
            'produk_id' => 'required'
        ]);

        $galeri->update($validator);

        if ($request->file('fotoProdukPertama')) {
            $file = $request->file('fotoProdukPertama')->store('img');

            $galeri->update([

                'fotoProdukPertama' => $file,
            ]);
        } else {
            return redirect('admin/galeri')->with('error', 'Tidak Ada Yng Berubah');
        }
        return redirect('admin/galeri')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete image
        $galeri = galeri::find($id);
        Storage::delete('storage/img/' . $galeri->fotoProdukPertama);

        //delete post
        $galeri->delete();

        // hapus file
        // Storage::delete('public/storage/img/' . $gambar->file);

        // hapus data
        Galeri::where('id', $id)->delete();

        return redirect('admin/galeri')->with('success', 'Data Berhasil Terhapus');
    }
}
