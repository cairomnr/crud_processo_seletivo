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
    return view('home');
});

Route::get('/system', 'SystemController@index');				// Return the view of list
Route::get('/system/create', 'SystemController@create');		// Return the view of insert
Route::get('/system/edit/{system}', 'SystemController@edit'); 	// Return the view of edit
Route::post('/system', 'SystemController@store'); 				// Insert a new system
Route::post('/system/{system}', 'SystemController@update'); 	// Update a existent system



Route::get('/system/search', 'SystemController@search'); 	// Update a existent system
