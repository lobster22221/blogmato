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

Route::get('/admin', 'Admin\adminController@index');
Route::get('/admin/posts', 'Admin\adminController@posts');
Route::get('/admin/posts/edit/{id}', 'Admin\adminController@postedit');