<?php


Route::group([
	'middleware' => 'auth', 
	'prefix' => 'password',
	'namespace' => '\\Winnie\\LaravelChangePassword\\Http\Controllers'
], function () {
	Route::get('/change', ['uses' => 'ChangePasswordController@index']);
});



// Route::get('login', ['uses' => $namespacePrefix.'VoyagerAuthController@login',     'as' => 'login']);
