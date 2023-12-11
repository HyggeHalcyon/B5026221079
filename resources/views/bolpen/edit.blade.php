@extends('bolpen/layout')

@section('content')
    <h3 class="text-center">UPDATE</h3>
    <h3 class="text-center">Bolpen</h3>

    <div class="container">
        <div class="col-5 text-right">
				<a  href="/bolpen"> << Kembali</a>
		</div>
        <form action="/bolpen/update" method="post" class="form-horizontal" id="update">
            {{ csrf_field() }}
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="merkbolpen" class="col-sm-2 col-form-label text-right">Merek Bolpen</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="merkbolpen" name="merkbolpen" value="{{ $data[0]->merkbolpen }}">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="stockbolpen" class="col-sm-2 col-form-label text-right">Stock</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="stockbolpen" name="stockbolpen" value="{{ $data[0]->stockbolpen }}">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="tersedia" class="col-sm-2 form-check-label text-right">Tersedia</label>
                <div class="col-sm-2">
                    <input type="checkbox" class="form-check-input mx-2" id="tersedia" name="tersedia" checked="{{ $data[0]->tersedia }}" >
                </div>
                <div class="col-sm-4">
                </div>
            </div>

            <div class="col text-center">
                <input type="submit" value="Update Data" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>
@endsection