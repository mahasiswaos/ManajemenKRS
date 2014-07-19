<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});
Route::get('/','App\\Controllers\\HomeController@index');

//Route::get('/coba', 'App\\Controllers\\AmbilMatkulController@index');

//routes untuk mahasiswa controller

Route::get('/Mahasiswa/view', 'App\\Controllers\\MahasiswaController@View');

Route::get('/Mahasiswa/add', 'App\\Controllers\\MahasiswaController@Add');

Route::post('/Mahasiswa/add/proses', 'App\\Controllers\\MahasiswaController@prosesAdd');

Route::get('/Mahasiswa/delete/{id}', 'App\\Controllers\\MahasiswaController@Delete');

Route::get('/Mahasiswa/edit/{id}', 'App\\Controllers\\MahasiswaController@Edit');

Route::post('/Mahasiswa/update/{id}', 'App\\Controllers\\MahasiswaController@Update');


//router untuk ambil matakuliah

Route::get('/AmbilMatkul/view', 'App\\Controllers\\AmbilMatkulController@View');

Route::get('/AmbilMatkul/add', 'App\\Controllers\\AmbilMatkulController@Add');

Route::post('/AmbilMatkul/add/proses', 'App\\Controllers\\AmbilMatkulController@prosesAdd');

Route::get('/AmbilMatkul/delete/{id}', 'App\\Controllers\\AmbilMatkulController@Delete');

Route::get('/AmbilMatkul/edit/{id}', 'App\\Controllers\\AmbilMatkulController@Edit');

Route::post('/AmbilMatkul/update/{id}', 'App\\Controllers\\AmbilMatkulController@Update');



//router untuk matakul

Route::get('/Matkul/view', 'App\\Controllers\\MatkulController@View');

Route::get('/Matkul/add', 'App\\Controllers\\MatkulController@Add');

Route::post('/Matkul/add/proses', 'App\\Controllers\\MatkulController@prosesAdd');

Route::get('/Matkul/delete/{id}', 'App\\Controllers\\MatkulController@Delete');

Route::get('/Matkul/edit/{id}', 'App\\Controllers\\MatkulController@Edit');

Route::post('/Matkul/update/{id}', 'App\\Controllers\\MatkulController@Update');

