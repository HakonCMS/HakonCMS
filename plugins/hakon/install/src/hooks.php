<?php

    # Hooks
    $hooks->listen("App\Events\EventCoreTemplateMenuBefore", function(){
        echo view('install::common.menu.before');
    });

    $hooks->listen("App\Events\EventCoreTemplateMenu", function(){
    	echo view('install::common.menu.menu');
    });

    $hooks->listen("App\Events\EventCoreTemplateMenuAfter", function(){
        echo view('install::common.menu.after');
    });
