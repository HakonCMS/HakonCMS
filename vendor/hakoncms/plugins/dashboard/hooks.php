<?php

    # Hooks
    $hooks->listen("App\Events\EventCoreTemplateMenuBefore", function(){
        echo view('dashboard::admin.menu.before');
    });

    $hooks->listen("App\Events\EventCoreTemplateMenu", function(){
    	echo view('dashboard::admin.menu.menu');
    });

    $hooks->listen("App\Events\EventCoreTemplateMenuAfter", function(){
        echo view('dashboard::admin.menu.after');
    });
