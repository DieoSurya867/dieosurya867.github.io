<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\produk;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload = Galeri::all();
        return view('pages.admin.galeri', compact('upload'));
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
            'photos' => 'required|image|max:10000|mimes:png,jpg',
            'produk_id' => 'required'
        ]);

        $file = $request->file('photos')->store('img');

        // Upload::create([
        //     'image' => $file
        // ]);
        $validator['photos'] = $file;
        Galeri::create($validator);
        return redirect('admin/galeri')->with('success', 'Data Berhasil Terupload');
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
        $galeri = Galeri::findOrFail($id);
        $produk = produk::all();
        return view("Pages.admin.galeri.edit", [
            'galeri' => $galeri,
            'produk' => $produk
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
        $galeri = Galeri::findOrFail($id);

        if ($request->file('photos')) {
            $file = $request->file('photos')->store('img');
            $galeri->update([
                'produk_id' => 'required',
                'photos' => $file
            ]);
        } else {
            return redirect('admin/galeri')->with('error', 'Tidak Ada Yng Berubah');
        }
        return redirect('admin/galeri')->with('success', 'Data Berhasil Diubah');

        // try {
        //     $file = $request->file('image')->store('img');
        //     $upload->update([
        //         'image' => $file
        //     ]);
        // } catch (\Throwable $th) {
        //     $upload->update([
        //         'image' => $upload->image
        //     ]);
        //     return redirect('upload')->with('success', 'Data Berhasil Diubah');
        // }
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
