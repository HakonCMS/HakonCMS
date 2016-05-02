<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class hakonAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        # Set global
        global $adminObj;

        # Vars
        $signinOK = false;

        # Renegerate session
        session()->regenerate();

        # Pull admin object from session
        $adminObj = Session::Get('adminObj');

        # Check the admin object
        if (is_object($adminObj)) :

            if ($adminObj->id) : 

                $signinOK = true;

            endif;

        endif;

        # Let's move on
        if ($signinOK) :

            # Admin object is okay
            return $next($request);

        else:

            # Clening up session
            Session::forget('adminObj');

            # Sending the user back to signin page with error message
            return redirect()->route("hakon::admin");

        endif;

    }
}
