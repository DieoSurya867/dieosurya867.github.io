<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
            'fotoProdukKedua' => 'required|image|max:10000|mimes:png,jpg',
            'fotoProdukKetiga' => 'required|image|max:10000|mimes:png,jpg',
            'fotoProdukKeempat' => 'required|image|max:10000|mimes:png,jpg',
        ]);

        $file = $request->file('fotoProdukPertama')->store('img');
        $file2 = $request->file('fotoProdukKedua')->store('img');
        $file3 = $request->file('fotoProdukKetiga')->store('img');
        $file4 = $request->file('fotoProdukKeempat')->store('img');

        // Upload::create([
        //     'image' => $file
        // ]);
        $validator['fotoProdukPertama'] = $file;
        $validator['fotoProdukKedua'] = $file2;
        $validator['fotoProdukKetiga'] = $file3;
        $validator['fotoProdukKeempat'] = $file4;
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
        // Ambil Data
        $dataLama = Galeri::where('id', $id)->first();

        if ($request->file('fotoProdukPertama')) {
            // Path Video Lama
            $foto1 = public_path('storage/' . $dataLama->fotoProdukPertama);
            if (File::exists($foto1)) {
                File::delete($foto1);
            }

            $file = $request->file('fotoProdukPertama')->store('img');

            $galeri->update([

                'fotoProdukPertama' => $file,
            ]);
        }
        if ($request->file('fotoProdukKedua')) {
            $foto2 = public_path('storage/' . $dataLama->fotoProdukKedua);
            if (File::exists($foto2)) {
                File::delete($foto2);
            }

            $file = $request->file('fotoProdukKedua')->store('img');

            $galeri->update([

                'fotoProdukKedua' => $file,
            ]);
        }
        if ($request->file('fotoProdukKetiga')) {
            $foto3 = public_path('storage/' . $dataLama->fotoProdukKetiga);
            if (File::exists($foto3)) {
                File::delete($foto3);
            }

            $file = $request->file('fotoProdukKetiga')->store('img');

            $galeri->update([

                'fotoProdukKetiga' => $file,
            ]);
        }
        if ($request->file('fotoProdukKeempat')) {
            $foto4 = public_path('storage/' . $dataLama->fotoProdukKeempat);
            if (File::exists($foto4)) {
                File::delete($foto4);
            }

            $file = $request->file('fotoProdukKeempat')->store('img');

            $galeri->update([

                'fotoProdukKeempat' => $file,
            ]);
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
        // Ambil Data
        $dataLama = Galeri::where('id', $id)->first();

        // Path Video Lama
        $foto1 = public_path('storage/' . $dataLama->fotoProdukPertama);
        $foto2 = public_path('storage/' . $dataLama->fotoProdukKedua);
        $foto3 = public_path('storage/' . $dataLama->fotoProdukKetiga);
        $foto4 = public_path('storage/' . $dataLama->fotoProdukKeempat);

        // Cek Apakah ada file videonya
        if (File::exists($foto1)) {
            File::delete($foto1);
        }
        if (File::exists($foto2)) {
            File::delete($foto2);
        }
        if (File::exists($foto3)) {
            File::delete($foto3);
        }
        if (File::exists($foto4)) {
            File::delete($foto4);
        }
        // Jika File tersebut ada
        // Hapus File tersebut
        Galeri::where('id', $id)->delete();


        return redirect('admin/galeri');

        // hapus file
        // Storage::delete('public/storage/img/' . $gambar->file);

        // hapus data
        Galeri::where('id', $id)->delete();

        return redirect('admin/galeri')->with('success', 'Data Berhasil Terhapus');
    }
}
