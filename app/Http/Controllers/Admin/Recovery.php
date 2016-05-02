<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Recovery extends Controller
{
    public function Index(){
    	return view('core.welcome');
    }
}
