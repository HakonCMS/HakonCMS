<?php

namespace Core\Dashboard\Service;

use App\Hooks as Hook;
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

	public function events($events = null){

		if ($events) :

			# Call Hook Object
			$hook = new Hook\Handler;
			$hook->events = $events;

			# Include
			include __DIR__.'/../hooks.php';

		endif;

	}

}