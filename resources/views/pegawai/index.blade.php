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


@section('judulhalaman', 'Data Pegawai')

@section('isikonten')

    <button type="button" class="btn btn-warning">
        <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
    </button>

	<br/>
	<br/>

    <div class="container" style="margin-left: 300px; margin-bottom: 20px; margin-top: 20px">
        <form action="/pegawai/cari" method="GET">
            <input class="form-control col-md-8" type="text" name="cari" placeholder="Cari Pegawai.." value="{{ old('cari') }}">
            <input class="form-control col-md-8 btn-success" type="submit" value="Cari">
        </form>
    </div>

	<table border="1">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}">
                    <button type="button" class="btn btn-info">Detail</button>
                </a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">
                    <button type="button" class="btn btn-info">Edit</button>
                </a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">
                    <button type="button" class="btn btn-info">Hapus</button>
                </a>
			</td>
		</tr>
		@endforeach
	</table>

    <br>

	{{ $pegawai->links()  }}

    @endsection
