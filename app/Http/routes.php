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
Route::get('/index', 'HomeOwnerController@index');
Route::get('/',  ['uses' => 'HomeOwnerController@index' , 'as' => 'HomeOwner.index']);
Route::get('/create', ['uses' => 'HomeOwnerController@create' , 'as' => 'HomeOwner.create']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
