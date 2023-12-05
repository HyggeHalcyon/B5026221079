<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('whomai')->group(function () {
    Route::get('/', function () { return view('whomai/index'); });
});

Route::prefix('tasks')->group(function () {
    Route::get('/task1', function () { return view('tasks/Task1-Linktree-Mockup/linktee'); });
    Route::get('/task3', function () { return view('tasks/Task3-BootstrapLayout/index'); });
    Route::get('/hello', function () { return view('tasks/workstation/hello'); });
    Route::get('/js1', function () { return view('tasks/workstation/js1'); });
    Route::get('/js2', function () { return view('tasks/workstation/js2'); });
    Route::get('/link', function () { return view('tasks/workstation/link'); });
    Route::get('/responsive', function () { return view('tasks/workstation/responsive'); });
    Route::get('/style', function () { return view('tasks/workstation/style'); });
    Route::get('/validasi', function () { return view('tasks/workstation/validasi'); });
});

Route::get('/pegawai', function () { 
    return redirect('/class/pegawai'); 
});

Route::prefix('class')->group(function () {
    Route::get('perkalian', 'App\Http\Controllers\DosenController@index' );
    Route::get('biodata', 'App\Http\Controllers\DosenController@biodata' );
    Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam' );
    Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
    Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

    Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
    Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
    Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
    Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
    Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
    Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
    Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
    Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
});

Route::prefix('EAS2022')->group(function (){
    Route::get('/index', 'App\Http\Controllers\EAS2022Controller@index');
    Route::get('/tambah', 'App\Http\Controllers\EAS2022Controller@tambah');
    Route::post('/store', 'App\Http\Controllers\EAS2022Controller@store');
});

Route::prefix('preEAS')->group(function () {
    Route::get('/index', 'App\Http\Controllers\PreEASController@index');
    Route::get('/tambah', 'App\Http\Controllers\PreEASController@tambah');
});