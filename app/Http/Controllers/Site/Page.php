<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Page extends Controller
{
    public function Selector(){
    	return view('core.welcome');
    }
}
