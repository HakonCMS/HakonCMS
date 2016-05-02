<?php

namespace Core\Install\Middleware;

use Closure;
use Core\Install\Controller\InstallController;

class InstallCheck
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

        # Vars
        $redirect = false;

        # Get status
        $installObj = new InstallController();
        $statusJSON = $installObj->status();

        if (isset($statusJSON)) :

            if (is_object($statusJSON)) :

                $data = $statusJSON->getData();

                if ($data) :

                    if (isset($data->installation_status)) :

                        if ($data->installation_status != "OK") :

                            $redirect = true;

                        endif;

                    endif;

                endif;

            endif;

        endif;

        if ($redirect) :

            return $next($request);

        else:

        	return redirect("/");

        endif;

    }
}
