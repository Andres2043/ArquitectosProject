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


Route::view('/','home')->name('home');
Route::view('/QuienesSomos','quienesSomos')->name('quienesSomos');
Route::view('/Contactos','contactos')->name('contactos');

Route::post('/Contact','ContactoController@store');


