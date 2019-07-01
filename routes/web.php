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

Route::get('/', 'InstitucionalController@index');
Route::get('/about', 'InstitucionalController@about');
Route::get('/cases', 'InstitucionalController@cases');
Route::get('/contacts', 'InstitucionalController@contacts');
Route::get('/budget', 'InstitucionalController@budget');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
