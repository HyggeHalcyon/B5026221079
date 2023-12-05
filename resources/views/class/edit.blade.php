@extends('class/navbar')

@section('title', 'Data Pegawai')

@section('content')
	<h3><a href="/class/pegawai">LOCALHOST</a></h3>
	<h3>Edit Pegawai</h3>

	<a href="/class/pegawai"> Kembali</a>

	<br/>
	<br/>

	<div class="container">
        <form action="/class/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $pegawai[0]->pegawai_id }}">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label text-center">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai[0]->pegawai_nama }}">
                </div>
            </div>
			<div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label text-center">Jabatan</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pegawai[0]->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label text-center">Umur</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="umur" name="umur" value="{{ $pegawai[0]->pegawai_umur }}">
                </div>
            </div>
			<div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label text-center">Alamat</label>
                <div class="col-sm-2">
                    <textarea  type="text" class="form-control" id="alamat" name="alamat">{{ $pegawai[0]->pegawai_alamat }}
					</textarea>
                </div>
            </div>

            <div class="col-sm-4 text-right">
                <input type="submit" value="Tambah Data" class="btn btn-primary mt-3">
            </div>
        </form>
    </div>
@endsection