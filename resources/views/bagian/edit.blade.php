@extends('layout.ceria')

@section('title', 'BAGIAN')

        <style>
            form{
                padding: 30px;
                width: 100%;
                margin: 10px, 10px, 10px, 10px;
                box-align: initial;
            }
        </style>

@section('judulhalaman', 'Edit Bagian')

@section('isikonten')

@foreach($absen as $p)
	<form action="/bagian/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodebagian }}"> <br/>
        Jumlah <input type="text" name="nama" required="required" value="{{ $b->namabagian }}">
        Jumlah <input type="number" name="jumlah" required="required" value="{{ $b->jumlahbagian }}">
		Status
        <input type="radio" id="tersedia" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
        <label for="hadir">Tersedia</label>
        <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
        <label for="tidak">Tidak Tersedia</label><br>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


 @endsection
