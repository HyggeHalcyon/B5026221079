@extends('EAS2022/layout')

@section('content')
    <h3 class="text-center">CREATE</h3>
    <h3 class="text-center">Nilai Kuliah</h3>

    <br/>

    <div class="container">
        <form action="/EAS2022/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="NRP" class="col-sm-2 col-form-label text-center">NRP</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="NRP" name="NRP" placeholder="5026221001">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="NilaiAngka" class="col-sm-2 col-form-label text-center">Nilai</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka" placeholder="95">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto mt-3">
                <div class="col-sm-4">
                </div>
                <label for="SKS" class="col-sm-2 col-form-label text-center">SKS</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="SKS" name="SKS" placeholder="18">
                </div>
                <div class="col-sm-4">
                </div>
            </div>

            <div class="col text-center">
                <input type="submit" value="Tambah Data" class="btn btn-primary mt-3">
            </div>
        </form>
    </div>
@endsection