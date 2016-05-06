<?php

    # Hooks
    $hooks->listen("App\Events\EventCoreTemplateMenu", function(){
    	echo view('dashboard::admin.menu.menu');
    });

    $hooks->listen("App\Events\EventCoreTemplateMenuItemAfter", function($param=null){

        if( isset($param) ):

            if (current($param) == "dashboard") :

                dump(123);

            endif;

        endif;

    });