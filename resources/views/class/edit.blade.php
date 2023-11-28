@extends('class/navbar')

@section('title', 'Data Pegawai')

@section('content')
	<h3><a href="/class/pegawai">LOCALHOST</a></h3>
	<h3>Edit Pegawai</h3>

	<a href="/class/pegawai"> Kembali</a>

	<br/>
	<br/>

	<div class="row">
		<div class="col-4">
			<form action="/class/pegawai/update" method="post" class="form-horizontal">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $pegawai[0]->pegawai_id }}">	
				<div class="form-group row">
					<label for="nama" class="col-md-2 col-form-label mr-2">Nama</label>
					<div class="col-md-10">
						<input type="text"
							class="form-control" 
							required="required" 
							name="nama" 
							value="{{ $pegawai[0]->pegawai_nama }}">
					</div>
				</div>
				<div class="form-group row">
					<label for="jabatan" class="col-md-2 col-form-label mr-2">Jabatan</label>
					<div class="col-md-10">
						<input type="text" 
							class="form-control" 
							required="required" 
							name="jabatan"
							value="{{ $pegawai[0]->pegawai_jabatan }}">
					</div>
				</div>
				<div class="form-group row">
					<label for="umur" class="col-md-2 col-form-label mr-2">Umur</label>
					<div class="col-md-10">
						<input type="text" 
							class="form-control" 
							required="required"  
							name="umur"
							value="{{ $pegawai[0]->pegawai_umur }}">
					</div>
				</div>

				<div class="form-group row">
					<label for="alamat" class="col-md-2 col-form-label mr-2">Alamat</label>
					<div class="col-md-10">
						<input type="text" 
							class="form-control" 
							required="required" 
							name="alamat"
							value="{{ $pegawai[0]->pegawai_alamat }}">
					</div>
				</div>
				<input type="submit" value="Simpan Data" class="btn btn-primary mt-2">
			</form>
		</div>
	</div>

	<!-- @foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach -->

@endsection