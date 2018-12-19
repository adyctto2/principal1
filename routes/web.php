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

Route::get('/','Auth\LoginController@showLoginForm');


Route::get('administrar','DashboardController@index')->name('dashboard');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('administrar/biowellBolivia','biowellBoliviaController@index')->name('biowell');
Route::get('administrar/nesHealthBolivia','nesHealthBoliviaController@index')->name('neshealth');
Route::get('administrar/quantumCenter','quantumCenterController@index')->name('quantumCenter');


Route::get('listar','ProductoController@index')->name('listar');
Route::get('crear-producto','ProductoController@indexProducto')->name('cp');
Route::post('crearProducto','ProductoController@store')->name('crearProducto');

Route::get('ver-producto/{id}','ProductoController@verProducto')->name('vp');
Route::delete('borrarProd/{id}', 'ProductoController@destroy')->name('borrarp');
Route::get('editar-producto/{id}','ProductoController@edit')->name('ep');
Route::post('actualizar','ProductoController@actualizar')->name('act');


Route::get('reserva','ReservaController@index')->name('rs');
Route::get('ver-reserva/{id}','ReservaController@ver')->name('vr');
Route::get('correo-reserva/{id}','ReservaController@enviarcorreo')->name('ecr');

Route::get('mensaje', 'MensajeController@index')->name('msj');
Route::get('ver-mensaje/{id}','MensajeController@ver')->name('vm');
Route::get('correo-mensaje/{id}','MensajeController@enviarcorreo')->name('ecm');


Route::get('listar-suscripcion','SuscripcionController@index')->name('lsus');
Route::get('crear-suscripcion','SuscripcionController@indexSuscripcion')->name('csus');
Route::delete('borrar-suscriptor/{id}', 'SuscripcionController@destroy')->name('borrarsus');
Route::post('crearS','SuscripcionController@store')->name('crearS');


Route::get('listar-categorias','CategoryController@index')->name('listcat');
Route::get('crear-categoria','CategoryController@indexCategoria')->name('ccat');
Route::delete('borrarCat/{id}', 'CategoryController@destroy')->name('bcat');
Route::get('editar-categoria/{id}','CategoryController@edit')->name('ecat');
Route::post('crearC','CategoryController@store')->name('crearcat');
Route::post('actualizar-categoria','CategoryController@actualizar')->name('actcat');



Route::get('listar-preguntas','PreguntasController@index')->name('lpreg');
Route::get('crear-pregunta','PreguntasController@indexPregunta')->name('cpreg');
Route::delete('borrarPreg/{id}', 'PreguntasController@destroy')->name('bpreg');
Route::get('editar-pregunta/{id}','PreguntasController@edit')->name('epreg');
Route::post('crearP','PreguntasController@store')->name('crearpreg');
Route::post('actualizar-pregunta','PreguntasController@actualizar')->name('actpreg');

Route::get('listar-testimonio','TestimonioController@index')->name('ltest');
Route::get('crear-testimonio','TestimonioController@indexTestimonio')->name('ctest');
Route::delete('borrarTest/{id}', 'TestimonioController@destroy')->name('btest');
Route::get('editar-testimonio/{id}','TestimonioController@edit')->name('etest');
Route::post('crearT','TestimonioController@store')->name('creartest');
Route::post('actualizar-testimonio','TestimonioController@actualizar')->name('acttest');