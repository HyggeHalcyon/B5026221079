@extends('bolpen/layout')

@section('content')
    <h2 class="text-center">GET</h2>
    <h3 class="text-center">Bolpen</h3>
    
    <a href="/bolpen/tambah" class="btn btn-primary">Tambah Data</a>
    <br/>
	<form action="/bolpen/cari" method="GET">
		<input class="form-control" type="text" name="cari" 
				placeholder="Cari Bolpen Berdasarkan Merk" 
				value="{{ old('cari', isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

    <div class="container">
        <table class="table table-striped table-hover text-center">
            <tr class="text-center">
                <th>Kode Bolpen</th>
                <th>Merek Bolpen</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Action</th>
            </tr>
            @foreach($data as $d)
            <tr class="text-center">
                <td>{{ $d->kodebolpen }}</td>
                <td>{{ $d->merkbolpen }}</td>
                <td>{{ $d->stockbolpen }}</td>
                <td>{{ $d->tersedia }}</td>
                <td>
                    <a href="/bolpen/view/{{ $d->kodebolpen }}" class="btn btn-primary">View</a>
                    <a href="/bolpen/edit/{{ $d->kodebolpen }}" class="btn btn-success">Edit</a>
                    <a href="/bolpen/hapus/{{ $d->kodebolpen }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $data->links() }}
    </div>
@endsection