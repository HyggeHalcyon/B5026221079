@extends('mahasiswa/layout')

@section('content')
    <h3 class="text-center">UPDATE</h3>
    <h3 class="text-center">Mahasiswa</h3>

    
    <div class="container">
        <div class="col-5 text-right">
				<a  href="/mahasiswa"> << Kembali</a>
		</div>
        <form action="/mahasiswa/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="NRP" value="{{ $data[0]->NRP }}">
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="nama" class="col-sm-2 col-form-label text-center">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data[0]->Nama }}">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="jurusan" class="col-sm-2 col-form-label text-center">Jurusan</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $data[0]->Jurusan }}">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto mt-3">
                <div class="col-sm-4">
                </div>
                <label for="ipk" class="col-sm-2 col-form-label text-center">IPK</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="ipk" name="ipk" value="{{ $data[0]->IPK }}">
                </div>
                <div class="col-sm-4">
                </div>
            </div>

            <div class="col text-center">
                <input type="submit" value="Update Mahasiswa" class="btn btn-primary mt-3">
            </div>
        </form>
    </div>
@endsection