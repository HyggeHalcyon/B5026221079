@extends('bolpen/layout')

@section('content')

    <h2 class="text-center">VIEW</h2>
    <h3 class="text-center">Bolpen</h3>

    <br/>

    <div class="container">
        <div class="col-5 text-right">
				<a  href="/bolpen"> << Kembali</a>
		</div>
		<div class="row">
			<div class="col-4 mr-5">
			</div>
			<div class="ml-3 col-6 d-flex align-items-center">
				<div class="container">
					<div class="row mb-2">
						<div class="col-2">Kode </div>
						<div class="col-1">:</div>
						<div class="col-9">{{ $data[0]->kodebolpen }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Merk</div>
						<div class="col-1">:</div>
						<div class="col-9">{{ $data[0]->merkbolpen }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Stock</div>
						<div class="col-1">: </div>
						<div class="col-9">{{ $data[0]->stockbolpen }}</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">Tersedia</div>
						<div class="col-1">: </div>
						<div class="col-9">{{ $data[0]->tersedia }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection