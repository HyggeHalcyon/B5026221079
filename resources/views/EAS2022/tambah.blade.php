@extends('EAS2022/layout')

@section('content')
    <h3 class="text-center">GET ALL</h3>
    <h3 class="text-center">Nilai Kuliah</h3>

    <br/>

    <div class="row">
        <div class="col-4">
            <form action="/EAS2022/store" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label mr-2">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NRP" name="NRP">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jabatan" class="col-md-2 col-form-label mr-2">NilaiAngka</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-md-2 col-form-label mr-2">SKS</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="SKS" name="SKS">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
@endsection