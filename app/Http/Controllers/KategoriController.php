<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\POST;
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

        if ($request->file('foto')) {
            $file = $request->file('foto')->store('img');
            $kategori->update([
                'namaKategori' => 'required|string',
                'foto' => $file
            ]);
        } else {
            return redirect('admin/kategori')->with('error', 'Tidak Ada Yng Berubah');
        }
        return redirect('admin/kategori')->with('success', 'Data Berhasil Diubah');
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
        Storage::delete('public/storage/img/' . $kategori->foto);

        //delete post
        $kategori->delete();

        // hapus file
        $gambar = Kategori::where('id', $id)->first();
        // Storage::delete('public/storage/img/' . $gambar->file);

        // hapus data
        // Kategori::where('id', $id)->delete();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Terhapus');
    }
}
