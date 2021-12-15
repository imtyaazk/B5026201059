<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tgs4');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');

Route::get('ETS', 'ViewController@showETS');

Route::get('TugasPHP', 'ViewController@showTugasPHP');
Route::post('pangkat', 'ViewController@showpangkat');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail{id}','PegawaiController@view');
//route CRUD
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{ID}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{ID}','AbsenController@hapus');
//route CRUD
Route::get('/bagian','BagianController@index');
Route::get('/bagian/tambah','BagianController@tambah');
Route::post('/bagian/store','BagianController@store');
Route::get('/bagian/edit/{id}','BagianController@edit');
Route::post('/bagian/update','BagianController@update');
Route::get('/bagian/hapus/{id}','BagianController@hapus');
Route::get('/bagian/cari','BagianController@cari');
Route::get('/bagian/detail{id}','BagianController@view');
