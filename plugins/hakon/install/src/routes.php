<?php

/*
|--------------------------------------------------------------------------
| Installation Routes
|--------------------------------------------------------------------------
*/

Route::group(
	[
		'as' => 'install::', 
		'middleware' => 'Plugin\Hakon\Install\Middleware\InstallCheck'
	], 
	function(){

		Route::get('/install', 'Plugin\Hakon\Install\Controller\InstallController@setup')
			->name("install::setup");

		Route::get('/install/info', 'Plugin\Hakon\Install\Controller\InstallController@stepTwo')
			->name("install::info");

	}
);

Route::get('/install/status', 'Plugin\Hakon\Install\Controller\InstallController@status')
	->name("install::status");