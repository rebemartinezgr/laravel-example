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

Route::get('/', function () {
    return view('welcome');
});

// Example Routes
    Route::group(['prefix'=>'example'], function(){
    Route::get('index', ['as' => 'index', 'uses' => 'App\Http\Controllers\ExampleController@index']);
    Route::get('detail/{id}', ['as' => 'detail', 'uses' => 'App\Http\Controllers\ExampleController@detail']);
    Route::get('create', ['as' => 'create', 'uses' => 'App\Http\Controllers\ExampleController@create']);
    Route::post('save', ['as' => 'save', 'uses' => 'App\Http\Controllers\ExampleController@save']);
    Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'App\Http\Controllers\ExampleController@delete']);
    Route::get('edit/{id}',  ['as' => 'edit', 'uses' => 'App\Http\Controllers\ExampleController@edit']);
    Route::post('update', ['as' => 'update', 'uses' => 'App\Http\Controllers\ExampleController@update']);
});

