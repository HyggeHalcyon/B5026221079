<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
CREATE TABLE mahasiswa(  
    NRP CHAR(6) NOT NULL PRIMARY KEY,
    Nama VARCHAR(50),
    Jurusan CHAR(15),
    IPK FLOAT()
);
*/

class MahasiswaController extends Controller
{
	// grab all data from table
	public function index()	{
		$data = DB::table('mahasiswa')
					->orderBy('NRP', 'asc')
					->paginate(7);

		return view('mahasiswa/index', ['data' => $data]);
	}

	public function view($NRP) {
		$data = DB::table('mahasiswa')
					->where('NRP', $NRP)
					->get();

		return view('mahasiswa/view', ['data' => $data]);
	}

	public function edit($NRP) {
		$data = DB::table('mahasiswa')
					->where('NRP', $NRP)
					->get();

		return view('mahasiswa/edit', ['data' => $data]);
	}

	public function update(Request $request) {
		DB::table('mahasiswa')
			->where('NRP', $request->NRP)
			->update([
				'Nama' => $request->nama,
				'Jurusan' => $request->jurusan,
				'IPK' => $request->ipk
			]);

		return redirect('/mahasiswa');
	}
} 
