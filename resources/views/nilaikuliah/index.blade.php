<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilai/tambah"> + Tambah Nilai Kuliah Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->$ID }}</td>
			<td>{{ $n->$NRP }}</td>
			<td>{{ $n->$NilaiAngka }}</td>
			<td>{{ $n->$SKS }}</td>
            <td>{{@if (count($n->$NilaiAngka) <= 40)
                D
            @elseif (41 <= count($n->$NilaiAngka) <= 60)
                C
            @elseif (61 <= count($n->$NilaiAngka) <= 80)
                B
            @else
                A
            @endif}}</td>
            <td><?php
                {{$n->$NilaiAngka = $a;
                $n->$SKS = $b;
                echo $a * $b;}}
            ?></td>
		</tr>
		@endforeach
	</table>


</body>
</html>
