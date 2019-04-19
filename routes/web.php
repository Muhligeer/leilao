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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/products', 'Products\ProductController');
Route::resource('/users', 'Users\UserController');
Route::resource('/lances', 'Lances\LanceController');

Route::get('/datatable','DatatablesController@getIndex');
Route::get('/anyData','DatatablesController@anyData')->name('datatables.data');
