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

Route::get('/', 'PostsController@index')->name('post.index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('users/{id}/edit', 'UsersController@edit')->name('user.edit');
Route::put('users/{id}', 'UsersController@update')->name('user.update');

Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');

Route::get('posts/{id}/comments', 'CommentsController@index')->name('comments.index');
Route::post('comments', 'CommentsController@store')->name('comments.store');
Route::get('posts/{id}/comments/create', 'CommentsController@create')->name('comments.create');
Route::delete('comments{id}', 'CommentsController@destroy')->name('comments.delete');