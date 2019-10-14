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
Route::get('/','DataController@index')->name('index');
Route::get('/table','DataController@table')->name('table');
Route::get('/table-pattern','DataController@tablePattern')->name('table-pattern');
