<?php 

// Auth
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/postlogin', 'AuthController@postlogin');

// Admin
Route::get('/admin', 'AdminController@index');