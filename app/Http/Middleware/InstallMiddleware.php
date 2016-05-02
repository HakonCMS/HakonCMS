<?php

namespace App\Http\Middleware;

use Closure;
use Plugin\Hakon\Install\Controller\InstallController;

class InstallMiddleware
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

            return redirect("/install");

        else:

            return $next($request);

        endif;

    }
}
