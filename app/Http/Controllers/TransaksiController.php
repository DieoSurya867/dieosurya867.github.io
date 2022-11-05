<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksi_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;

class TransaksiController extends Controller
{
	public function index()
	{
		// mengambil data dari table pegawai
		$transaksi = DB::table('transaksi')->get();

		// mengirim data pegawai ke view index
		return view('transaksi', ['transaksi' => $transaksi]);
	}

	public function midtrans(Request $request)
	{
		// $harga = $request->harga;
		// $orderid = $request->id;
		// $metode = $request->metode;
		Config::$serverKey = 'SB-Mid-server-TW97hDH4YPWSqIc05NMRcGVG';
		Config::$isProduction = false;
		Config::$isSanitized = true;
		Config::$is3ds = true;

		$params = array(
			'transaction_details' => array(
				'order_id' => rand(),
				'gross_amount' => 10000,

			),
			"enabled_payments" => [
				'bank_transfer'
			],
		);
		$snapToken = Snap::getSnapToken($params);
		return json_encode($snapToken);
	}
}
