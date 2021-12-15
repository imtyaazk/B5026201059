<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilai
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambah()
    {

        // memanggil view tambah
        return view('nilaikuliah.tambah');

    }

    public function store(Request $request)
    {
        // insert data ke table nilai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/nilai');

    }
}
