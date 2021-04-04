<?php 

// Auth
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

// Admin
Route::group(['middleware' => ['authAdmin']], function () {
	Route::get('/admin', 'AdminController@index');
});

// Petugas
Route::group(['middleware' => ['authPetugas']], function () {
	Route::get('/petugas', 'PetugasController@index');
});

// Siswa
Route::group(['middleware' => ['authSiswa']], function () {
	Route::get('/siswa', 'SiswaController@index');
});

