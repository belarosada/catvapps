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

Route::get('/', 'HomeController@index')->name('index');

Route::group(['prefix' => 'masterdata'], function () {

    Route::group(['prefix' => 'catv_channel'], function () {

        Route::get('/', 'CatvchannelController@index');
        Route::get('add', 'CatvchannelController@add');
        Route::get('store', 'CatvchannelController@store');
        Route::get('edit', 'CatvchannelController@edit');
        Route::get('delete/{id}', 'CatvchannelController@delete');
        Route::get('editView/{id}', 'CatvchannelController@editView');

    });

    Route::group(['prefix' => 'program'], function () {

        Route::get('/', 'ProgramController@index');
        Route::get('add', 'ProgramController@add');
        Route::get('store', 'ProgramController@store');
        Route::get('edit', 'ProgramController@edit');
        Route::get('delete/{id}', 'ProgramController@delete');

    });

});
