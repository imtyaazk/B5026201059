@extends('layout.ceria')

@section('title', 'PEGAWAI')

<style>
    form{
        padding: 30px;
        width: 100%;
        margin: 10px, 10px, 10px, 10px;
        box-align: initial;
    }
</style>

@section('isikonten')

@section('judulhalaman', 'Tambah Pegawai')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

    @endsection
