@extends('class/navbar')

@section('title', 'Data Pegawai')

@section('content')

    <h3><a href="/class/pegawai">LOCALHOST</a></h3>
	<h3>View Pegawai</h3>

	<a href="/class/pegawai"> Kembali</a>

	<br/>
	<br/>

    <div class="container">
		<div class="row">
			<div class="col-2">
			</div>
			<div class="col-4">
				<div class="card">
					<div class="card-body">
						<img src="{{ asset('pegawai/profile.jpg') }}" 
							class="img-fluid mx-auto d-block" 
							style="width: 100%; height: auto;"
							alt="profile picture">
					</div>
				</div>
			</div>
			<div class="col-6 d-flex align-items-center">
				<div class="container">
					<div class="row mb-2">
						<div class="col-2">Nama </div>
						<div class="col-1">:</div>
						<div class="col-9">{{ $pegawai[0]->pegawai_nama }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Jabatan</div>
						<div class="col-1">:</div>
						<div class="col-9">{{ $pegawai[0]->pegawai_jabatan }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Umur</div>
						<div class="col-1">: </div>
						<div class="col-9">{{ $pegawai[0]->pegawai_umur }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Alamat</div>
						<div class="col-1">: </div>
						<div class="col-9">{{ $pegawai[0]->pegawai_alamat }}</div>
					</div>
					<div class="d-flex justify-content-end col-10">
						<a href="/class/pegawai" class="btn btn-primary mt-3">Ok</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection