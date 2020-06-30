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

 Route::get('/', 'BlogController@index')->name('home');
 Route::get('/blog/{id}','BlogController@show')->name('show');
 Route::get('/create','BlogController@create')->name('create');
 Route::post('/store','BlogController@store')->name('store');
 Route::get('/edit/blog/{id}','BlogController@edit')->name('edit');
 Route::put('/edit/blog/{id}','BlogController@update')->name('update');
 Route::delete('/delete/blog/{id}','BlogController@destroy')->name('delete');