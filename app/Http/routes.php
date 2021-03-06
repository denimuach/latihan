<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Defau; homepage
//Route::get('/', 'ArticlesController@index');


Route::get('/','ArticlesController@index');
Route::resource('articles','ArticlesController');
Route::resource('comments','CommentsController');
Route::resource('products','ProductsController');
//Route::resource('users', 'UsersController', array('except' => array('index', 'destroy')));
Route::resource('users', 'UsersController');
Route::resource('sessions', 'SessionsController', ['only' => array('create','store')]);
Route::get('/logout','SessionsController@logout');

Route::get('/reset-password', array('as' => 'reset-password', 'uses' => 'UsersController@reset_password'));
Route::post('/process-reset-password', array('as' => 'process-reset-password', 'uses' => 'UsersController@process_reset_password'));
Route::get('/change-password/{forgot_token}', array('as' => 'change-password', 'uses' => 'UsersController@change_password'));
Route::post('/process-change-password/{forgot_token}', array('as' => 'process-change-password', 'uses' => 'UsersController@process_change_password'));
