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

Route::get('/', 'PropertyController@index');
Route::get('/admin/index', 'PropertyController@adminIndex');
Route::get('/admin/create', function() {
   return view('admin.create');
});

Route::post('/property/create', 'PropertyController@store');