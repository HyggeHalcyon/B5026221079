@extends('class/navbar')

@section('title', 'Data Pegawai')

@section('content')
	<h3>LOCALHOST</h3>
	<h3>Data Pegawai</h3>

	<a href="/class/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
	
	<br/>
	<form action="/class/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" 
				placeholder="Cari Pegawai Berdasarkan Nama" 
				value="{{ old('cari', isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/class/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-primary">View</a>
				<a href="/class/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
				<a href="/class/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $pegawai->links() }}
@endsection