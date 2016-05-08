<?php

namespace Core\Install\Controller;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use eFuzyon\String;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

class InstallController extends Controller
{

    public function setup()
    {

        # Globals
        global $application;

        # Vars
        $data = [
            "application" => $application
        ];

        # View
        echo view("install::step-1", $data);

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

        # Globals
        global $application;

        # Vars
        $data = [
            "application" => $application
        ];

        # View
        echo view("install::step-2", $data);

    }

    public function save(){

        # Globals
        global $application;

        # Vars
        $env = file_get_contents(__DIR__ . "/../../../../../.env");
        $final_env = "";
        $vars = array();
        $base_dir = __DIR__ . "/../../../../../";

        # Reading file
        if ($env) :

            # Get lines
            $lines = explode("\n", $env);

            # Run lines
            if ($lines) :

                foreach($lines as $line):

                    if (strpos($line, "=") !== false) :

                        $el = explode("=", $line);

                        if( count($el) > 1 ):

                            $vars[$el[0]] = $el[1];

                        endif;

                    endif;

                endforeach;

            endif;

        endif;

        # Clean up post vars
        $host = String::Clean($_POST['host']);
        $port = String::Clean($_POST['port']);
        $database = String::Clean($_POST['database']);
        $username = String::Clean($_POST['username']);
        $password = String::Clean($_POST['password']);
        $_POST['user_name'] = String::Clean($_POST['user_name']);
        $_POST['user_email'] = String::Clean($_POST['user_email']);
        $_POST['user_username'] = String::Clean($_POST['user_username']);
        $_POST['user_password'] = String::Clean($_POST['user_password']);

        # Push post vars to pre-env
        $vars["DB_HOST"] = $host;
        $vars["DB_PORT"] = $port;
        $vars["DB_DATABASE"] = $database;
        $vars["DB_USERNAME"] = $username;
        $vars["DB_PASSWORD"] = $password;

        # Push pre-env to final env
        if ($vars) :

            foreach($vars as $key => $item):

                $final_env .= "{$key}={$item}\n";

            endforeach;

        endif;

        # Push final env to file
        file_put_contents($base_dir . ".env", $final_env);

        # Let's run migration
        try {
            Artisan::call('migrate:rollback');
            Artisan::call('migrate');
        } catch(Exception $e){}

        # Adding admin to the db
        $adminObj = new Admin();
        $adminObj->name = $_POST['user_name'];
        $adminObj->email = $_POST['user_email'];
        $adminObj->username = $_POST['user_username'];
        $adminObj->password = md5($_POST['user_password']);
        $adminObj->save();

        # Yaml objects
        $yaml = new Parser();
        $dumper = new Dumper();

        # Get application yaml
        $appObj = $yaml->parse(file_get_contents($base_dir . "application.yml"));

        # Set new value
        $appObj["installation"]["status"] = "OK";

        # Get dump from app object
        $yaml = $dumper->dump($appObj);

        # Push to file
        file_put_contents($base_dir . "application.yml", $yaml);

        # Redirect
        return redirect()->route('hakon::dashboard');

    }

}