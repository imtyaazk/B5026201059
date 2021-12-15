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

    <button type="button" class="btn btn-warning">
        <a href="/bagian/tambah"> + Tambah Bagian Baru</a>
    </button>

	<br/>
	<br/>

    <div class="container" style="margin-left: 300px; margin-bottom: 20px; margin-top: 20px">
        <form action="/bagian/cari" method="GET">
            <input class="form-control col-md-8" type="text" name="cari" placeholder="Cari Bagian.." value="{{ old('cari') }}">
            <input class="form-control col-md-8 btn-success" type="submit" value="Cari">
        </form>
    </div>

	<table border="1">
		<tr>
            <th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tersedia</th>
		</tr>
		@foreach($bagian as $b)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $b->namabagian }}</td>
			<td>{{ $b->jumlahbagian }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
				<a href="/bagian/detail/{{ $b->kodebagian }}">
                    <button type="button" class="btn btn-info">Detail</button>
                </a>
				<a href="/bagian/edit/{{ $b->kodebagian }}">
                    <button type="button" class="btn btn-info">Edit</button>
                </a>
				<a href="/bagian/hapus/{{ $b->kodebagian }}">
                    <button type="button" class="btn btn-info">Hapus</button>
                </a>
			</td>
		</tr>
		@endforeach
	</table>

    <br>

	{{ $bagian->links()  }}

    @endsection
