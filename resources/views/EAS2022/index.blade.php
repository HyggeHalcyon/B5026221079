@extends('EAS2022/layout')

@section('content')
    <h3 class="text-center">GET ALL</h3>
    <h3 class="text-center">Nilai Kuliah</h3>

    <br/>

    <div class="container">
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->NRP }}</td>
                <td>{{ $d->NilaiAngka }}</td>
                <td>{{ $d->SKS }}</td>
                <td>{{ $d->NilaiHuruf }}</td>
                <td>{{ $d->Bobot }}</td>
            </tr>
            @endforeach
        </table>
        <a href="/EAS2022/tambah" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection