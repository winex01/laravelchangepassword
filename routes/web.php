<?php


Route::group(['middleware' => 'auth', 'prefix' => 'password'], function () {
	Route::get('/change', function () {
	    echo 'password change!!!';
	});
});
