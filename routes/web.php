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

Route::get('/', 'indexController@home');

Route::get('/author', 'authorController@view');
Route::post('/author', 'authorController@add');

Route::get('/movie', 'movieController@view');
Route::post('/movie', 'movieController@add');

Route::get('/author/list', 'authorController@listing');

Route::get('/movie/list', 'movieController@listing');

Route::get('/author/{id}', 'authorController@edit')->name('author edit');
Route::post('/author/{id}', 'authorController@add');

Route::get('/movie/{id}', 'movieController@edit')->name('movie edit');
Route::post('/movie/{id}', 'movieController@add');