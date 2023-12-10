<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table keranjangbelanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data barang ke view index
		return view('indexbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah barang
    // ganti beli
	public function tambah()
	{

		// memanggil view beli
		return view('belibelanja');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data keranjangbelanja
	public function hapus($id)
	{
		// menghapus data barang berdasarkan kode yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

}
