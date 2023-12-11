<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
CREATE TABLE bolpen (  
    kodebolpen int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    merkbolpen VARCHAR(30),
    stockbolpen INT,
    tersedia CHAR(1)
);
*/

class BolpenController extends Controller
{
	public function index()	{
		$data = DB::table('bolpen')
					->orderBy('kodebolpen', 'asc')
					->paginate(7);
		
		foreach ($data as $key => $value) {
			if ($value->tersedia == 'Y') {
				$value->tersedia = 'Tersedia';
			} else {
				$value->tersedia = 'Tidak Tersedia';
			}
		}

		return view('bolpen/index', ['data' => $data]);
	}

	// insert data to table
	public function tambah() {
		return view('bolpen/tambah');
	}

	public function store(Request $request) {
		if ($request->tersedia == 'on') {
			$request->tersedia = 'Y';
		} else {
			$request->tersedia = 'N';
		}

		DB::table('bolpen')->insert([
			'merkbolpen' => $request->merkbolpen,
			'stockbolpen' => $request->stockbolpen,
			'tersedia' => $request->tersedia
		]);

		return redirect('/bolpen');
	}

	public function edit($id) {
		$data = DB::table('bolpen')
					->where('kodebolpen', $id)
					->get();

		if ($data[0]->tersedia == 'Y') {
			$data[0]->tersedia = 'yes';
		} else {
			$data[0]->tersedia = '';
		}

		return view('bolpen/edit', ['data' => $data]);
	}

	public function update(Request $request){
		DB::table('bolpen')->where('kodebolpen', $request->kodebolpen)->update([
			'merkbolpen' => $request->merkbolpen,
			'stockbolpen' => $request->stockbolpen,
			'tersedia' => $request->tersedia
		]);

		return redirect('/bolpen');
	}

	public function hapus($id){
		DB::table('bolpen')->where('kodebolpen', $id)->delete();

		return redirect('/bolpen');
	}

	public function cari(Request $request){
		$cari = $request->cari;

		$data = DB::table('bolpen')
					->where('merkbolpen', 'like', "%".$cari."%")
					->paginate();

		foreach ($data as $key => $value) {
			if ($value->tersedia == 'Y') {
				$value->tersedia = 'Tersedia';
			} else {
				$value->tersedia = 'Tidak Tersedia';
			}
		}

		return view('bolpen/index', ['data' => $data]);
	}

	public function view($id){
		$data = DB::table('bolpen')
					->where('kodebolpen', $id)
					->get();

		foreach ($data as $key => $value) {
			if ($value->tersedia == 'Y') {
				$value->tersedia = 'Tersedia';
			} else {
				$value->tersedia = 'Tidak Tersedia';
			}
		}

		return view('bolpen/view', ['data' => $data]);
	}
} 