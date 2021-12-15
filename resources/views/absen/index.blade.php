@extends('layout.ceria')

@section('title', 'Absen Pegawai')

@section('judulhalaman', 'Absen Pegawai')

@section('isikonten')

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

    <h3>Tabel Absen</h3>
    <table border="1">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->ID }}</td>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
