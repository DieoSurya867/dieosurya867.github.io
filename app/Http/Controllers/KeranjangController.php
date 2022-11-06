<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = keranjang::all();
        return view('Pages.admin.keranjang', compact('keranjang'));
    }
}
