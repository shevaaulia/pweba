<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table mahasiswa
		// $pegawai = DB::table('pegawai')->get();
        $mahasiswa = DB::table('mahasiswa')->get();

    	// mengirim data mahasiswa ke view index
		return view('indexmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// method untuk insert data ke table mahasiswa
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mahasiswa')->insert([
			'NRP' => $request->nrp,
			'Nama' => $request->nama,
			'Jurusan' => $request->jurusan,
			'IPK' => $request->ipk
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');

	}

	// method untuk edit data mahasiswa
	public function edit($id)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data mahasiswa yang didapat ke view editmahasiswa.blade.php
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// update data mahasiswa
	public function update(Request $request)
	{
		// update data mahasiswa
		DB::table('mahasiswa')->where('NRP',$request->id)->update([
			'NRP' => $request->nrp,
			'Nama' => $request->nama,
			'Jurusan' => $request->jurusan,
			'IPK' => $request->ipk
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');
	}

    	// method untuk view data mahasiswa
        public function view($id)
        {
            // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('NRP', $id)->get();
            // passing data mahasiswa yang didapat ke view viewmahasiswa.blade.php
        return view('viewmahasiswa', ['mahasiswa' => $mahasiswa]);
        }

}
