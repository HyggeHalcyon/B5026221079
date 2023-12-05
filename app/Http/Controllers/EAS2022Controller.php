<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
CREATE TABLE nilaikuliah (  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    NRP CHAR(6),
    NilaiAngka int,
    SKS int
);
*/

class EAS2022Controller extends Controller
{
	// grab all data from table
	public function index()	{
		$data = DB::table('nilaikuliah')
					->orderBy('id', 'asc')
					->get();

		foreach ($data as $d) {
			switch (true) {
				case ($d->NilaiAngka >= 81):
					$d->NilaiHuruf = 'A';
					break;
				case ($d->NilaiAngka >= 61):
					$d->NilaiHuruf = 'B';
					break;
				case ($d->NilaiAngka >= 41):
					$d->NilaiHuruf = 'C';
					break;
				default:
					$d->NilaiHuruf = 'D';
					break;
			}
			$d->Bobot = $d->NilaiAngka * $d->SKS;
		}

		return view('EAS2022/index', ['data' => $data]);
	}

	// insert data to table
	public function tambah() {
		return view('EAS2022/tambah');
	}

	public function store(Request $request) {
		DB::table('nilaikuliah')
			->insert([
				'NRP' => $request->NRP,
				'NilaiAngka' => $request->NilaiAngka,
				'SKS' => $request->SKS
			]);
		return redirect('/EAS2022/index');
	}
} 