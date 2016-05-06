<?php

	use App\Events;
	use App\Hooks;
	use Collective\Html\HtmlBuilder as Html;

	Html::macro("Hook", function($name = null, $param = null)
	{

		if ($name) :

			try {

				Event::Fire(new Hooks\Handler($name, $param));

			} catch(Exception $e){}

		endif;

	});
