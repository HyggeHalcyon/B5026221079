@extends('class/navbar')

@section('title', 'Data Pegawai')

@section('content')
	<h3><a href="/class/pegawai">LOCALHOST</a></h3>
	<h3>Tambah Pegawai</h3>

	<a href="/class/pegawai"> Kembali</a>

	<br/>
	<br/>

	<div class="row">
		<div class="col-4">
			<form action="/class/pegawai/store" method="post" class="form-horizontal">
				{{ csrf_field() }}
				<div class="form-group row">
					<label for="nama" class="col-md-2 col-form-label mr-2">Nama</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
				</div>
				<div class="form-group row">
					<label for="jabatan" class="col-md-2 col-form-label mr-2">Jabatan</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="jabatan" name="jabatan">
					</div>
				</div>
				<div class="form-group row">
					<label for="umur" class="col-md-2 col-form-label mr-2">Umur</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="umur" name="umur">
					</div>
				</div>

				<div class="form-group row">
					<label for="alamat" class="col-md-2 col-form-label mr-2">Alamat</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="alamat" name="alamat">
					</div>
				</div>
				<input type="submit" value="Simpan Data" class="btn btn-primary mt-2">
			</form>
		</div>
	</div>

	<!-- <form action="/class/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> -->

@endsection