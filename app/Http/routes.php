<?php

Route::get('/', ['uses' => 'HomeController@index' , 'as' => 'Guest.home']);
Route::get('/login', 'HomeController@login');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'user'] , function(){
	Route::get('/index/', 'UserController@index');
	Route::get('/',  	  ['uses' => 'UserController@index' , 'as' => 'User.index']);
	Route::group(['prefix' => 'account'] , function(){
		Route::get('/create/', ['uses' => 'UserController@create' , 'as' => 'User.account.create']);
		Route::get('/search/', ['uses' => 'UserController@search' , 'as' => 'User.account.search']);
		Route::get('/create/success', ['uses' => 'UserController@store' , 'as' => 'User.account.create.success']);
	});
	Route::get('/session/logout', ['uses' => 'UserController@logout' , 'as' => 'User.session.logout']);
});
Route::group(['prefix' => 'homeowner'] , function(){
	Route::get('/index/',  	  ['uses' => 'HomeOwnerController@index' , 'as' => 'HomeOwner.index']);
	Route::group(['prefix' => 'account'] , function(){
		Route::get('/create/', ['uses' => 'HomeOwnerController@create' , 'as' => 'HomeOwner.account.create']);
		Route::get('/search/', ['uses' => 'HomeOwnerController@search' , 'as' => 'HomeOwner.account.search']);
		Route::get('/create/success', ['uses' => 'HomeOwnerController@store' , 'as' => 'HomeOwner.account.create.success']);
	});
});
