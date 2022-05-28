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
    return view('form');
});
Route::post('save-temp','App\Http\Controllers\FromController@store');
Route::get('/show-create','App\Http\Controllers\ShowController@create');
Route::get('/edit','App\Http\Controllers\FromController@edit');
Route::post('/edit/{id}','App\Http\Controllers\FromController@update');
Route::get('/use','App\Http\Controllers\UserController@index');
// Route::post('/use','App\Http\Controllers\UserController@store');