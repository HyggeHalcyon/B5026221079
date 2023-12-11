@extends('mahasiswa/layout')

@section('content')
    <h3 class="text-center">GET ALL</h3>
    <h3 class="text-center">Mahasiswa</h3>

    <br/>

    <div class="container">
        <table class="table table-striped table-hover">
            <tr class="text-center">
                <th>NRP</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
            @foreach($data as $d)
            <tr class="text-center">
                <td>{{ $d->NRP }}</td>
                <td>{{ $d->Nama }}</td>
                <td>{{ $d->Jurusan }}</td>
                <td>{{ $d->IPK }}</td>
                <td class="text-center">
                    <a href="/mahasiswa/view/{{ $d->NRP }}" class="btn btn-primary">View</a>
                    <a href="/mahasiswa/edit/{{ $d->NRP }}" class="btn btn-success">Edit</a>
			    </td>
            </tr>
            @endforeach
        </table>
        {{ $data->links() }}
    </div>
@endsection