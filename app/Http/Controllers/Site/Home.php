<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Hooks as Hook;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Home extends Controller
{
	public function Index(){

		return view('core.welcome');

	}
}
