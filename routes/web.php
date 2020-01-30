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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get("/",            "SiswaController@index");

Route::get("/siswa",            "SiswaController@index");
Route::get("/siswa/create",     "SiswaController@create");
Route::post("/siswa/create",     "SiswaController@store");
Route::get("/siswa/{id}/edit",  "SiswaController@edit");
Route::put("/siswa/{id}",       "SiswaController@update");
Route::delete("/siswa/{id}",    "SiswaController@delete");

Route::post("/siswa/import",    "SiswaController@import");
Route::get("/siswa/cetak",     "SiswaController@cetak");