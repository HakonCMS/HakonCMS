<?php

    # Hooks
    $hook->on("Core::Admin::Template::Menu::Item::Before", function($item=null){

        if ($item == "dashboard") :

            // ...

        endif;

    });

    $hook->on("Core::Admin::Template::Menu", function($param=null){

        echo view('dashboard::admin.menu.menu');

    });
