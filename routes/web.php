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

route::get('/','BlogPostsController@index');

//posts
Route::get('/posts','BlogPostsController@index');
Route::post('/posts', 'BlogPostsController@store');
//posts/create
Route::get('/posts/create','BlogPostsController@create');

Route::get('/posts/{id}','BlogPostsController@show');

