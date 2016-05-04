<?php

/*
|--------------------------------------------------------------------------
| Installation Routes
|--------------------------------------------------------------------------
*/

Route::group(
	[
		'as' => 'install::', 
		'middleware' => 'Core\Install\Middleware\InstallCheck'
	], 
	function(){

		Route::get('/install', 'Core\Install\Controller\InstallController@setup')
			->name("install::setup");

		Route::get('/install/info', 'Core\Install\Controller\InstallController@stepTwo')
			->name("install::info");

	}
);

Route::get('/install/status', 'Core\Install\Controller\InstallController@status')
	->name("install::status");