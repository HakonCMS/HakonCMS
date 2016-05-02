<?php

	use App\Events;
	use Collective\Html\HtmlBuilder as Html;

	Html::macro("Hook", function($name = null, $param = null)
	{

		if ($name) :

			try {

				Html::$name($param);

			} catch(Exception $e){}

		endif;

	});

	Html::macro("Core::Admin::Template::Menu", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenuBefore($param));
		Event::Fire(new Events\EventCoreTemplateMenu($param));
		Event::Fire(new Events\EventCoreTemplateMenuAfter($param));
	});

	Html::macro("Core::Admin::Template::Menu::Item", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenuItemBefore($param));
		Event::Fire(new Events\EventCoreTemplateMenuItem($param));
		Event::Fire(new Events\EventCoreTemplateMenuItemAfter($param));
	});