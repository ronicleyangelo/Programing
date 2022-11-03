<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'FormularioController@index')->name('formulario');
Route::group(['namespace' => 'Admin'], function () {
	Route::get('/rotina-manha', 'CotidianoController@index')->name('rotina-manha');
	Route::get('/rotina-tarde', 'CotidianoController@periodoDaTarde')->name('rotina-tarde');
});