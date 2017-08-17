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

route::get('/','PostsController@index');

//posts
Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}','PostsController@show');

Route::post('/posts/{id}/comments','CommentsController@store');
Route::post('/posts', 'PostsController@store');

Route::post('admin/posts/edit/{id}','PostsController@update');
        
//profiles

Route::get('/user','UsersController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 
Route::get('/fileentry', 'FileEntryController@index');
Route::get('/fileentry/get/{filename}', [
	'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('/fileentry/add',[ 
        'as' => 'addentry', 'uses' => 'FileEntryController@add']);