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
					->get();

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

		return redirect('/bolpen/index');
	}
} 