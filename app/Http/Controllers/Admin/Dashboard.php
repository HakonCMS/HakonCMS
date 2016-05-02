<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{

    public function Index(){

    	# Globals
    	global $application;

    	# Output 
    	return view('core.hakon-admin.pages.dashboard', 
    	[
    		"application" => $application
    	]);

    }

}
