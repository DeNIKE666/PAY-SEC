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

Route::prefix('/')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::prefix('/cabinet')->namespace('Cabinet')->middleware('auth')->group(function () {
    Route::get('/', 'CabinetController@index')->name('cabinet');
});


Route::group(['prefix' => 'account'], function () {
    Auth::routes();
});
