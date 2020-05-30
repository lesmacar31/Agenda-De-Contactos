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


Auth::routes();

Route::get('/', 'ContactoController@index')->name('home');
route::get('/crear_contacto', 'ContactoController@create')->name ('crear_contacto');
route::post('/enviarcontacto', 'ContactoController@store')->name('guardar_contacto');
route::get('/modificar_contacto/{id}', 'ContactoController@edit')->name('modificar_contacto');
route::post('/actualizar_contacto/{id}','ContactoController@update')->name('actualizar_contacto');
route::get('/eliminar_contacto/{id}', 'ContactoController@destroy')->name('eliminar_contacto');
route::get('/ayuda', 'ContactoController@ayuda')->name('ayuda');
