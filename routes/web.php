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
