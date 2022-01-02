<?php

namespace App\Listner;

use App\Events\GetCurrentTime;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GetCurrentTimeData
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\GetCurrentTime  $event
     * @return void
     */
    public function handle(GetCurrentTime $event)
    {
        echo $event->curr_time;
    }
}
