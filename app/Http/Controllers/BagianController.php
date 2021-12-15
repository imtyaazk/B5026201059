<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BagianController extends Controller
{
    public function index()
    {
    	// mengambil data dari table bagian
    	$bagian = DB::table('bagian')->paginate(5);

    	// mengirim data bagian ke view index
    	return view('bagian.index',['bagian' => $bagian]);

    }

        // method untuk menampilkan view form tambah bagian
    public function tambah()
    {

        // memanggil view tambah
        return view('bagian.tambah');

    }

        // method untuk insert data ke table bagian
    public function store(Request $request)
    {
        // insert data ke table bagian
        DB::table('bagian')->insert([
            'namabagian' => $request->nama,
            'jumlahbagian' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bagian
        return redirect('/bagian');

    }

        // method untuk edit data bagian
    public function edit($id)
    {
        // mengambil data bagian berdasarkan id yang dipilih
        $bagian = DB::table('bagian')->where('kodebagian',$id)->get();
        // passing data bagian yang didapat ke view edit.blade.php
        return view('bagian.edit',['bagian' => $bagian]);

    }


        // update data bagian
    public function update(Request $request)
    {
        // update data bagian
        DB::table('bagian')->where('kodebagian',$request->id)->update([
            'namabagian' => $request->nama,
            'jumlahbagian' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bagian
        return redirect('/bagian');
    }

        // method untuk hapus data bagian
    public function hapus($id)
    {
        // menghapus data bagian berdasarkan id yang dipilih
        DB::table('bagian')->where('kodebagian',$id)->delete();

        // alihkan halaman ke halaman bagian
        return redirect('/bagian');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bagian sesuai pencarian data
		$bagian = DB::table('bagian')
		->where('namabagian','like',"%".$cari."%")
		->paginate();

    		// mengirim data bagian ke view index
		return view('bagian.index',['bagian' => $bagian]);

	}

    public function view($id)
    {
        // mengambil data bagian berdasarkan id yang dipilih
        $bagian = DB::table('bagian')->where('kodebagian',$id)->get();
        // passing data bagian yang didapat ke view edit.blade.php
        return view('bagian.detail',['bagian' => $bagian]);

    }

}
