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
/*
 * Admin Routes
 * This route is grouped by prefix, as ,middleware and namespace
*/
Route::group(['prefix' => 'admin/','as' => 'admin.',  'namespace' => 'Admin\\', 'middleware' => ['auth']], function () {

    Route::get('dashboard',          [ 'as' => 'dashboard',       'uses' => 'DashboardController']);
    Route::get('client',             [ 'as' => 'client.index',    'uses' => 'ClientController@index']);
    Route::get('client/create',      [ 'as' => 'client.create',   'uses' => 'ClientController@create']);

});

/*
 * Frontend Routes
*/
Route::get( '/',  [ 'as' => 'home',          'uses' => 'HomeController@index'] );