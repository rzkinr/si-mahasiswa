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


Route::get("/login", "HomeController@index")
    ->name("login");
Route::post("/login", "HomeController@login")->name("login.login");

Route::get("/logout", "HomeController@logout")->name("logout");

Route::resource("mahasiswa", "MahasiswaController")->middleware("web");

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
