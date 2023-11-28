<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3><a href="http://localhost:8000/class/pegawai">LOCALHOST</a></h3>
	<h3>Data Pegawai</h3>

	<a href="/class/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/class/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>



</body>
</html>