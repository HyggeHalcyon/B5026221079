@extends('bolpen/layout')

@section('content')
    <h3 class="text-center">CREATE</h3>
    <h3 class="text-center">Bolpen</h3>

    <br/>

    <div class="container">
        <form action="/bolpen/store" method="post" class="form-horizontal" id="tambah">
            {{ csrf_field() }}
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="merkbolpen" class="col-sm-2 col-form-label text-right">Merek Bolpen</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="merkbolpen" name="merkbolpen" placeholder="Pilot">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="stockbolpen" class="col-sm-2 col-form-label text-right">Stock</label>
                <div class="col-sm-2">
                <input type="number" class="form-control" id="stockbolpen" name="stockbolpen" placeholder="100">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="form-group row mx-auto">
                <div class="col-sm-4">
                </div>
                <label for="tersedia" class="col-sm-2 form-check-label text-right">Tersedia</label>
                <div class="col-sm-2">
                <input type="checkbox" class="form-check-input mx-2" id="tersedia" name="tersedia" placeholder="100">
                </div>
                <div class="col-sm-4">
                </div>
            </div>

            <div class="col text-center">
                <input type="submit" value="Tambah Data" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>
@endsection