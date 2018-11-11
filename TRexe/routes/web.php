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

Route::get('/','ContentsController@home')->name('home');
Route::get('/Sales', 'SalesController@search')->name('search');
//Route::post('/Sales', 'SalesController@request')->name('request');
//Route::get('/Sales/request', 'SalesController@request')->name('request');
Route::get('/Sales/{listing_id}', 'SalesController@details')->name('details');
Route::post('/Sales/{listing_id}', 'SalesController@request')->name('request');

Route::get('/Contact', 'ContactsellerController@showform')->name('showform');
Route::post('/Contact', 'ContactsellerController@showform')->name('sendemail');

