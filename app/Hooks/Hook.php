<?php

namespace App\Hooks;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Handler extends Event
{

    use SerializesModels;

    /**
     * Vars
     */
    public $hooks;

    /**
     * Do callbacks to every hook registered
     *
     * @return void
     */
    public function __construct($name=null, $param=null)
    {

    	if (!empty($name)) :

            # Call global variable
            global $hooks;

            # Get callbacks for this hook
            if (isset($hooks[$name])) :

                # Push all the callbacks into a var
                $callbacks = $hooks[$name];

                # Use the callbacks
                if ($callbacks) :

                    foreach ($callbacks as $callback) :

                        $callback($param);

                    endforeach;

                endif;

            endif;

        endif;

    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    /**
     * Register Hooks:
     * On $name do $callback
     *
     * @return void
     */
    public function on($name=null, $callback=null){

        # Call global variable
        global $hooks;

        # Push callback to global hooks
        $hooks[$name][] = $callback;

    }

}
