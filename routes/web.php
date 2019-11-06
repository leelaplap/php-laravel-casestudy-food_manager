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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('change-language', 'LangController@setLang')->name('setLang');
Route::middleware('locale')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::prefix('foods')->group(function () {

        Route::get('phanquyen', 'FoodsController@check');
        Route::get('/', 'FoodsController@getAll')->name('foods.index');
        Route::get('create', 'FoodsController@create')->name('foods.create');
        Route::post('store', 'FoodsController@store')->name('foods.store');
        Route::get('{id}/edit', 'FoodsController@edit')->name('foods.edit');
        Route::post('{id}/update', 'FoodsController@update')->name('foods.update');
        Route::get('{id}/destroy', 'FoodsController@destroy')->name('foods.destroy');
        Route::get('search', 'FoodsController@search')->name('foods.search');
        Route::get('/add-to-cart/{id}', 'ShoppingController@addToCart')->name('addToCart');

    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomerController@getAll')->name('customers.index');
        Route::get('create', 'CustomerController@create')->name('customers.create');
        Route::post('store', 'CustomerController@store')->name('customers.store');
        Route::get('{id}/edit', 'CustomerController@edit')->name('customers.edit');
        Route::post('{id}/update', 'CustomerController@update')->name('customers.update');
        Route::get('{id}/destroy', 'CustomerController@destroy')->name('customers.destroy');
        Route::get('search', 'CustomerController@search')->name('customers.search');
        Route::get('/add-to-cart/{id}', 'ShoppingController@addToCart')->name('addToCart');

    });

//    Route::get('/phan-quyen','UserController@index');

});





