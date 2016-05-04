<?php

namespace Plugin\Hakon\Install\Controller;

use App\Http\Controllers\Controller;

class InstallController extends Controller
{

    public function setup()
    {

        echo view("install::step-1");

    }

    public function status()
    {

        # Globals
        global $application;

        # Vars
        $status = "";

        # Get installation status from application
        if (isset($application->installation)) :

            if (array_key_exists("status", $application->installation)) :

                $status = ($application->installation->status == "OK") ? "OK" : "" ;

            endif;

        endif;

        # Push info to output
        $output = array(
            "installation_status" => $status
        );

        # Output
        return response()->json($output);

    }

    public function stepTwo(){

        echo view("install::step-2");

    }

}