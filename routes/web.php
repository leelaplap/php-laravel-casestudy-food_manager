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

Route::prefix('foods')->group(function () {
    Route::get('/', 'FoodsController@getAll')->name('foods.index');
    Route::get('create', 'FoodsController@create')->name('foods.create');
    Route::post('store', 'FoodsController@store')->name('foods.store');
    Route::get('{id}/edit', 'FoodsController@edit')->name('foods.edit');
    Route::post('{id}/update', 'FoodsController@update')->name('foods.update');
    Route::get('{id}/destroy', 'FoodsController@destroy')->name('foods.destroy');
    Route::get('search', 'FoodsController@search')->name('foods.search');
});
