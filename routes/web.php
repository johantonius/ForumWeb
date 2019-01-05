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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forums', 'ForumController@index');

Route::get('/forum/create', 'ForumController@create')->name('f.create');

Route::post('/forum/save', 'ForumController@store')->name('f.save');

Route::get('/forum/{id}/edit', 'ForumController@edit')->name('f.edit');

Route::post('/forum/{id}/update', 'ForumController@update')->name('f.update');

Route::get('/forum/{id}/delete', 'ForumController@destroy')->name('f.delete');

Route::get('/categories', 'CategoryController@index');