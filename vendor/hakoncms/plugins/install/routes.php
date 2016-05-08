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

		# Get
		Route::get('/install', 'Core\Install\Controller\InstallController@setup')
			->name("setup");

		Route::get('/install/info', 'Core\Install\Controller\InstallController@stepTwo')
			->name("info");

		Route::get('/install/project', 'Core\Install\Controller\InstallController@stepThree')
			->name("project");

		# Post
		Route::post('/install/info', 'Core\Install\Controller\InstallController@save')
			->name("save");

	}
);

Route::get('/install/status', 'Core\Install\Controller\InstallController@status')
	->name("install::status");
