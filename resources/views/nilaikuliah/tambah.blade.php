<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilai"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilai/store" method="post">
		{{ csrf_field() }}
		NRP <input type="text" name="nrp" required="required"> <br/>
		Nilai Angka<input type="text" name="nilaiangka" required="required"> <br/>
		SKS <input type="text" name="sks" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
