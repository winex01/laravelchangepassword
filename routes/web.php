<?php


Route::group([
	'middleware' => 'auth', 
	'prefix' => 'password',
	'namespace' => '\\Winnie\\LaravelChangePassword\\Http\Controllers'
], function () {
	Route::get('/change', ['uses' => 'ChangePasswordController@index'])->name('password.change');
	Route::patch('/change', ['uses' => 'ChangePasswordController@update'])->name('password.change.update');
});
