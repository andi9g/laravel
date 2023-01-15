<?php

use Illuminate\Support\Facades\Route;

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

Route::get('alat', 'perangkatC@index');
Route::post('alat', 'perangkatC@store')->name('tambah.perangkat');
Route::post('alat/ubahip/{idperangkat}', 'perangkatC@ubahip')->name('ubah.ip');
Route::delete('alat/hapusperangkat/{idperangkat}', 'perangkatC@destroy')->name('hapus.perangkat');



Route::post('ubahpassword', 'indexC@ubahpassword')->name('ubah.password');
