<?php

namespace Core\Dashboard\Service;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;

class DashboardServiceProvider extends ServiceProvider {

	public function boot(Dispatcher $events){

		# Call parent
		parent::boot($events);

		# Views
		$this->loadViewsFrom(__DIR__.'/../View', 'dashboard');

		# Call Events
		$this->events($events);

	}

	public function register(){

		# Include
		include __DIR__.'/../routes.php';

		# Code
		$this->app->make('Core\Dashboard\Controller\DashboardController');

	}

	public function events($hooks = null){

		if ($hooks) :

			# Include
			include __DIR__.'/../hooks.php';

		endif;

	}

}