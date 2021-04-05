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

Route::get('/', 'Pagecontroller@index')->name('home');
Route::post('/', 'Pagecontroller@store')->name('store');
Route::get('/display', 'Pagecontroller@display')->name('display');
Route::get('/edit/{id}', 'Pagecontroller@edit')->name('edit');
Route::post('/update/{id}', 'Pagecontroller@update')->name('update');
Route::get('/delete/{id}', 'Pagecontroller@delete')->name('delete');
