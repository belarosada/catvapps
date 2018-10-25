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
        Route::get('editView/{id}', 'ProgramController@editView');

    });

    Route::group(['prefix' => 'lokasi_area'], function () {

        Route::get('/', 'LokasiAreaController@index');
        Route::get('add', 'LokasiAreaController@add');
        Route::get('store', 'LokasiAreaController@store');
        Route::get('edit', 'LokasiAreaController@edit');
        Route::get('delete/{id}', 'LokasiAreaController@delete');
        Route::get('editView/{id}', 'LokasiAreaController@editView');

    });

    Route::group(['prefix' => 'box'], function () {

        Route::get('/', 'BoxController@index');
        Route::get('add', 'BoxController@add');
        Route::get('store', 'BoxController@store');
        Route::get('edit', 'BoxController@edit');
        Route::get('delete/{id}', 'BoxController@delete');
        Route::get('editView/{id}', 'BoxController@editView');

    });

    Route::group(['prefix' => 'material'], function () {

        Route::get('/', 'MaterialController@index');
        Route::get('add', 'MaterialController@add');
        Route::get('store', 'MaterialController@store');
        Route::get('edit', 'MaterialController@edit');
        Route::get('delete/{id}', 'MaterialController@delete');
        Route::get('editView/{id}', 'MaterialController@editView');

    });

    Route::group(['prefix' => 'jenis_material'], function () {

        Route::get('/', 'JenisMaterialController@index');
        Route::get('add', 'JenisMaterialController@add');
        Route::get('store', 'JenisMaterialController@store');
        Route::get('edit', 'JenisMaterialController@edit');
        Route::get('delete/{id}', 'JenisMaterialController@delete');
        Route::get('editView/{id}', 'JenisMaterialController@editView');


    });

});

Route::group(['prefix' => 'transaksi'], function () {

    Route::group(['prefix' => 'catv_headend'], function () {

        Route::group(['prefix'  =>  'test_result'], function (){

            Route::get('/', 'TestResultController@index');
            Route::get('add', 'TestResultController@add');
            Route::post('store', 'TestResultController@store');
            Route::get('edit', 'TestResultController@edit');
            Route::get('delete/{id}', 'TestResultController@delete');
            Route::get('editView/{id}', 'TestResultController@editView');
            Route::get('pull', 'TestResultController@pull');

        });

        Route::group(['prefix'  =>  'falcom_tx'], function (){

            Route::get('/', 'FalcomTxController@index');
            Route::get('add', 'FalcomTxController@add');
            Route::post('store', 'FalcomTxController@store');
            Route::get('edit', 'FalcomTxController@edit');
            Route::get('delete/{id}', 'FalcomTxController@delete');
            Route::get('editView/{id}', 'FalcomTxController@editView');
            Route::get('pull', 'FalcomTxController@pull');

        });

        Route::group(['prefix'  =>  'foxcom_tx'], function (){

            Route::get('/', 'FoxcomTxController@index');
            Route::get('add', 'FoxcomTxController@add');
            Route::post('store', 'FoxcomTxController@store');
            Route::get('edit', 'FoxcomTxController@edit');
            Route::get('delete/{id}', 'FoxcomTxController@delete');
            Route::get('editView/{id}', 'FoxcomTxController@editView');
            Route::get('pull', 'FoxcomTxController@pull');

        });

    });

    Route::group(['prefix' => 'catv_field'], function () {

        Route::group(['prefix'  =>  'coupler'], function (){

            Route::get('/', 'CouplerController@index');
            Route::get('add', 'CouplerController@add');
            Route::post('store', 'CouplerController@store');
            Route::get('pull', 'CouplerController@pull');

        });

    });

});
