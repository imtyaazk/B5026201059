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


@section('judulhalaman', 'Data Bagian')

@section('isikonten')

	<a href="/bagian"> Kembali</a>

	<br/>
	<br/>

	<form action="/bagian/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jumlah <input type="number" name="jumlah" required="required"> <br/>
		Status <input type="radio" id="tersedia" name="status" value="Y">
        <label for="tersedia">Tersedia</label>
        <input type="radio" id="css" name="status" value="N" checked="checked">
        <label for="tidak">Tidak Tersedia</label><br>

		<input type="submit" value="Simpan Data">
	</form>

    @endsection
