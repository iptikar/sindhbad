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



Route::get('/', 'SindhbadFrontEnd@index');
Route::match(array('GET','POST'),'/login', 'SindhbadFrontEnd@login');
Route::get('/account', 'SindhbadFrontEnd@account');
Route::post('/create-account', 'SindhbadFrontEnd@CreateAccount');

Route::get('/user-admin-14e18/', 'SindhbadBackEnd@index');
Route::get('/user-admin-14e18/upload', 'SindhbadBackEnd@UploadProductView');



Route::resource('sindhbad', ' SindhbadFrontEnd');
Route::resource('user-admin-14e18', 'SindhbadBackEnd');

