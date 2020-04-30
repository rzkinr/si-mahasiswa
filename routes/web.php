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
	return view('dashboard');
});


Route::get("/login", "HomeController@index")
	->name("login");
Route::post("/login", "HomeController@login")->name("login.login");

Route::get("/logout", "HomeController@logout")->name("logout");

Route::resource("mahasiswa", "MahasiswaController")->middleware("web");

Route::get('/excel', 'MahasiswaController@export_excel')->name('mahasiswa.excel');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//List mahasiswa
// Route::middleware("auth")->group(function(){
Route::get("/mahasiswa", "MahasiswaController@index")
	->name("mahasiswa.index");
Route::get("/biodata-mahasiswa/{id}/detail", "MahasiswaController@show")
	->name("mahasiswa.show");
Route::get("/mahasiswa/create", "MahasiswaController@create")
	->name("mahasiswa.create");
Route::post("/mahasiswa", "MahasiswaController@store")
	->name("mahasiswa.store");
Route::get("/mahasiswa/{id}/edit", "MahasiswaController@edit")
	->name("mahasiswa.edit");
Route::post("/mahasiswa/{id}/update", "MahasiswaController@update")
	->name("mahasiswa.update");
Route::get("/mahasiswa/{id}/delete", "MahasiswaController@destroy")
	->name("mahasiswa.destroy");
// });

Route::get("/mail/send", "MailController@send");
