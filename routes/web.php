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
Route::get('/ports/bulkEdit', 'PortController@bulkEdit')->middleware('auth');
Route::resource('/devices', 'DeviceController')->middleware('auth');
Route::resource('/ports', 'PortController')->middleware('auth');
Route::resource('/changes', 'ChangesController')->middleware('auth');
Route::resource('/templates', 'TemplateController')->middleware('auth');
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;
