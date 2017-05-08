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

Route::get('adicionar','adicionarController@index');
Route::post('store','adicionarController@store');

Route::get('adicionar', 'HomeController@getAdicionar');
Route::get('/home','HomeController@getData');
Route::get('/home', 'HomeController@index')->name('home');
