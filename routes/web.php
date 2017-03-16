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

Route::get('/', function () { return redirect()->route('system'); });

Route::get('/system', 'SystemController@index')->name('system');					// Return the view of list
Route::get('/system/create', 'SystemController@create')->name('system.create');		// Return the view of insert
Route::get('/system/edit/{system}', 'SystemController@edit')->name('system.edit'); 	// Return the view of edit
Route::get('/system/search', 'SystemController@search')->name('system.search'); 	// Update a existent system
Route::post('/system', 'SystemController@store'); 									// Insert a new system
Route::post('/system/{system}', 'SystemController@update'); 						// Update a existent system
