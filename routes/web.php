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

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/loginform', 'LoginController@login');
Route::get('/loginform', 'LoginController@showFormLogin');

Route::get('/registerform', 'RegisterController@showFormRegister');
Route::post('/registerform', 'RegisterController@registered');


Route::get('/forums', 'ForumController@index');

Route::get('/forum/create', 'ForumController@create')->name('f.create');

Route::post('/forum/save', 'ForumController@store')->name('f.save');

Route::get('/forum/{id}/edit', 'ForumController@edit')->name('f.edit');

Route::post('/forum/{id}/update', 'ForumController@update')->name('f.update');

Route::get('/forum/{id}/delete', 'ForumController@destroy')->name('f.delete');

Route::get('/categories', 'CategoryController@index');
Route::post('/categories','CategoryController@store');

Route::get('/categories/edit/{id}', 'CategoryController@edit');
Route::post('/categories/edit/update/{id}', 'CategoryController@update');
Route::get('/categories/delete/{id}','CategoryController@destroy');

Route::get('/forums/{id}','ThreadController@show');
Route::get('/forums/{id}/add/', 'ThreadController@screate');