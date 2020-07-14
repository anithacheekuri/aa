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
    return view('welcome');
});


Route::any('eloquent','EloquentController@index' );
//manytomany
Route::any('manytomany','EloquentController@manytomany' );
Route::resource('song','Songscontroller');


Route::any('dd','EloquentController@dd' );
    
