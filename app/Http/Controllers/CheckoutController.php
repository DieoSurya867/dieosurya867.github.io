<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use App\Models\keranjang;

use Exception;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;



class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $keranjang = Keranjang::where('users_id', $user_id)->get();
        return view('pages.user.checkout', compact('keranjang'));
    }

    // public function process(Request $request)
    // {
    //     $user = Auth::user();
    //     $user->update($request->except('total_harga'));

    //     $code = 'STORE-' . mt_rand(0000, 9999);
    //     $keranjang = keranjang::with(['user', 'produk'])
    //         ->where('users_id', Auth::user()->id)
    //         ->get();

    //     $transaksi = transaksi::create([
    //         'users_id' => Auth::user()->id,
    //         'harga_ongkir' => 0,
    //         'total_harga' => $request->total_harga,
    //         'transaksi_status' => 'PENDING',
    //         'kode_transaksi' => $code
    //     ]);
    //     foreach ($keranjang as $keranjang) {
    //         $trx = 'TRX-' . mt_rand(0000, 9999);

    //         transaksi_detail::create([
    //             'transaksi_id' => $transaksi->id,
    //             'produk_id' => $keranjang->produk->id,
    //             'hargaTransaksi' => $keranjang->produk->hargaTransaksi,
    //             'pengiriman_status' => 'PENDING',
    //             'resi' => '',
    //             'kode_transaksi' => $trx
    //         ]);
    //     }
    //     return dd($transaksi);
    // }

    public function callback(Request $request)
    {
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
        //
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
    public function wilayah()
    {
        $data = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        return $data->json();
        //  $bersih = $data['data']->json();  
        //  foreach ($data as $key) {
        //     echo $key->name;
        //  } 
    }
    public function midtrans()
    {
        // Set your Merchant Server Key
        Config::$serverKey = 'SB-Mid-server-TW97hDH4YPWSqIc05NMRcGVG';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'enabled_payment' => [
                'bank_transfer'
            ]
        );
        $snapToken = Snap::getSnapToken($params);
        return json_encode($snapToken);
    }
}
