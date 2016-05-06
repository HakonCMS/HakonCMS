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

# Core Admin Template Menu
	Html::macro("Core::Admin::Template::Menu::Before", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenuBefore($param));
	});

	Html::macro("Core::Admin::Template::Menu", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenu($param));
	});

	Html::macro("Core::Admin::Template::Menu::After", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenuAfter($param));
	});

# Core Admin Template Menu Item
	Html::macro("Core::Admin::Template::Menu::Item::Before", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenuItemBefore($param));
	});

	Html::macro("Core::Admin::Template::Menu::Item", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenuItem($param));
	});

	Html::macro("Core::Admin::Template::Menu::Item::After", function($param = null)
	{
		Event::Fire(new Events\EventCoreTemplateMenuItemAfter($param));
	});