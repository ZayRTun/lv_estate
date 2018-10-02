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

// Property Controllers
Route::get('/', 'PropertyController@index');

// Admin Controllers
Route::get('/admin', 'AdminController@index');

Route::get('/admin/create', 'AdminController@create');

Route::post('/admin', 'AdminController@store');

Route::get('/admin/{property}', 'AdminController@show');

Route::get('/admin/{property}/edit', 'AdminController@edit');

Route::patch('/admin/{id}', 'AdminController@update');

Route::get('/admin/{property}/delete', 'AdminController@delete');

Route::delete('/admin/{id}', 'AdminController@destroy');
