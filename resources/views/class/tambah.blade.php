@extends('class/navbar')

@section('title', 'Data Pegawai')

@section('content')
	<h3><a href="/class/pegawai">LOCALHOST</a></h3>
	<h3>Tambah Pegawai</h3>

	<a href="/class/pegawai"> Kembali</a>

	<br/>
	<br/>

	<div class="container">
        <form action="/class/pegawai/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label text-center">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Johan Ronald">
                </div>
            </div>
			<div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label text-center">Jabatan</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Staff">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label text-center">Umur</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="umur" name="umur" placeholder="21">
                </div>
            </div>
			<div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label text-center">Alamat</label>
                <div class="col-sm-2">
                    <textarea  type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Panglateh">
					</textarea>
                </div>
            </div>

            <div class="col-sm-4 text-right">
                <input type="submit" value="Tambah Data" class="btn btn-primary mt-3">
            </div>
        </form>
    </div>
@endsection