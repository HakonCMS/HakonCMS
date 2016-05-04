<?php

namespace Core\Install\Service;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;

class InstallServiceProvider extends ServiceProvider {

	public function boot(Dispatcher $events){

		# Call parent
		parent::boot($events);

		# Views
		$this->loadViewsFrom(__DIR__.'/../View', 'install');

		# Call Events
		$this->events($events);

	}

	public function register(){

		# Include
		include __DIR__.'/../routes.php';

		# Code
		$this->app->make('Core\Install\Controller\InstallController');

	}

	public function events($hooks = null){

		if ($hooks) :

			# Include
			include __DIR__.'/../hooks.php';

		endif;

	}

}