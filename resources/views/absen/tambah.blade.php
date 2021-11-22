<!DOCTYPE html>
<html>
<head>
	<title>Tugas Laravel CRUD</title>
</head>
<body>

	<h3>Tabel Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="text" required="required" name="IDPegawai"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal"> <br/>
		Status <input type="text" required="required" name="status"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
