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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/biodata-mahasiswa", "MahasiswaController@index")
	->name("mahasiswa.index");
Route::get('/biodata-mahasiswa/create', 'MahasiswaController@create')
	->name("mahasiswa.create");
Route::get('/biodata-mahasiswa/{id}/detail', 'MahasiswaController@show')
	->name("mahasiswa.show");
Route::post('/biodata-mahasiswa', 'MahasiswaController@store')
	->name("mahasiswa.store");
Route::get('/biodata-mahasiswa/{id}/edit', 'MahasiswaController@edit')
	->name("mahasiswa.edit");
Route::post('/biodata-mahasiswa/{id}/update', 'MahasiswaController@update')
	->name("mahasiswa.update");
Route::get('/biodata-mahasiswa/{id}/delete', 'MahasiswaController@destroy')
	->name("mahasiswa.destroy");