@extends('mahasiswa/layout')

@section('content')
    <h3 class="text-center">VIEW</h3>
    <h3 class="text-center">Mahasiswa</h3>

	<br/>

    <div class="container">
		<div class="ml-5 pl-5 mb-2">
			<div class="ml-5 pl-5 mb-2">
				<a  href="/mahasiswa"> << Kembali</a>
			</div>
		</div>
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
						<div class="col-2">NRP</div>
						<div class="col-1">: </div>
						<div class="col-9">{{ $data[0]->NRP }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Nama </div>
						<div class="col-1">:</div>
						<div class="col-9">{{ $data[0]->Nama }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Jurusan</div>
						<div class="col-1">:</div>
						<div class="col-9">{{ $data[0]->Jurusan }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">IPK</div>
						<div class="col-1">: </div>
						<div class="col-9">{{ $data[0]->IPK }}</div>
					</div>
					<!-- <div class="d-flex col-10">
						<a href="/mahasiswa" class="btn btn-primary mt-3">Ok</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>

@endsection