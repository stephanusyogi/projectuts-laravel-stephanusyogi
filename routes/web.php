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


Route::get("/", "LoginController@showLoginForm")->name("login.index");
Route::post("/", "LoginController@login")->name("login.login");

Route::get("/docamp", "CampingController@index")
	->name("camping.index");

Route::get("/docamp/create", "CampingController@create")
	->name("camping.create");

Route::post("/docamp", "CampingController@store")
	->name("camping.store");

Route::get("/docamp/{id}/edit", "CampingController@edit")
	->name("camping.edit");

Route::post("/docamp/{id}/update", "CampingController@update")
	->name("camping.update");

Route::get("/docamp/{id}/delete", "CampingController@destroy")
	->name("camping.destroy");




Route::get("/docamp/pelanggan/index", "PelangganController@index")
	->name("pelanggan.index");

Route::get("/docamp/pelanggan/create", "PelangganController@create")
	->name("pelanggan.create");

Route::post("/docamp/", "PelangganController@store")
	->name("pelanggan.store");

Route::get("/docamp/{id}/pelanggan/edit", "PelangganController@edit")
	->name("pelanggan.edit");

Route::post("/docamp/{id}/pelanggan/update", "PelangganController@update")
	->name("pelanggan.update");

Route::get("/docamp/{id}/pelanggan/delete", "PelangganController@destroy")
	->name("pelanggan.destroy");