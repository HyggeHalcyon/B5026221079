@extends('bolpen/layout')

@section('content')
    <h2 class="text-center">GET ALL</h2>
    <h3 class="text-center">Bolpen</h3>

    <br/>

    <div class="container">
        <table class="table table-striped table-hover text-center">
            <tr>
                <th>Kode Bolpen</th>
                <th>Merek Bolpen</th>
                <th>Stock</th>
                <th>Tersedia</th>
            </tr>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->kodebolpen }}</td>
                <td>{{ $d->merkbolpen }}</td>
                <td>{{ $d->stockbolpen }}</td>
                <td>{{ $d->tersedia }}</td>
            </tr>
            @endforeach
        </table>
        <a href="/bolpen/tambah" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection