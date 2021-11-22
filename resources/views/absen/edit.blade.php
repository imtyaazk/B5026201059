<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}"> <br/>
		ID Pegawai <input type="text" required="required" name="IDPegawai" value="{{ $a->IDPegawai}}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal" value="{{ $a->Tanggal }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $a->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
