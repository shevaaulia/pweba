<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table sepeda
		// $sepeda = DB::table('sepeda)->get();
        $sepeda = DB::table('sepeda')->get();

    	// mengirim data sepeda ke view index
		return view('indexsepeda',['sepeda' => $sepeda]);

	}

	// method untuk menampilkan view form tambah sepeda
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahsepeda');

	}

	// method untuk insert data ke table sepeda
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sepeda')->insert([
			// 'kodesepeda' => $request->kode,
			'merksepeda' => $request->merk,
			'stocksepeda' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman sepeda
		return redirect('/sepeda');

	}

	// method untuk edit data sepeda
	public function edit($id)
	{
		// mengambil data sepeda berdasarkan kode yang dipilih
		$sepeda = DB::table('sepeda')->where('kodesepeda',$id)->get();
		// passing data sepeda yang didapat ke view editsepeda.blade.php
		return view('editsepeda',['sepeda' => $sepeda]);

	}

    	// update data sepeda
	public function update(Request $request)
	{
		// update data sepeda
		DB::table('sepeda')->where('kodesepeda',$request->id)->update([
			'merksepeda' => $request->merk,
			'stocksepeda' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman sepeda
		return redirect('/sepeda');
	}

	// method untuk hapus data sepeda
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan kode yang dipilih
		DB::table('sepeda')->where('kodesepeda',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepeda');
	}

    // method untuk mencari data sepeda
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table sepeda sesuai pencarian data
		$sepeda = DB::table('sepeda')
		->where('merksepeda','like',"%".$cari."%")
		->paginate();

    		// mengirim data sepeda ke view index
		return view('indexsepeda',['sepeda' => $sepeda, 'cari' => $cari]);

	}

    	// method untuk view data sepeda
        public function view($id)
        {
            // mengambil data sepeda berdasarkan kode yang dipilih
        $sepeda = DB::table('sepeda')->where('kodesepeda', $id)->get();
            // passing data sepeda yang didapat ke view viewsepeda.blade.php
        return view('viewsepeda', ['sepeda' => $sepeda]);
        }

}
