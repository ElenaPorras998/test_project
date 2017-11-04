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
Route::post('/author', 'authorController@add')->name('add author');

Route::get('/book', 'movieController@view');
Route::post('/book', 'movieController@add')->name('add movie');

Route::get('/author/list', 'authorController@listing');

Route::get('/book/list', 'movieController@listing');

Route::get('/author/{id}', 'authorController@edit')->name('author edit');
Route::post('/author/{id}', 'authorController@add');

Route::get('/book/{id}/edit', 'movieController@edit')->name('movie edit');
Route::post('/book/{id}/edit', 'movieController@add');

Route::get('/book/{id}', 'movieController@detail')->name('movie detail');