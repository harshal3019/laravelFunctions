<?php

namespace App\Providers;

use App\Providers\GetCurrentTime;
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
     * @param  \App\Providers\GetCurrentTime  $event
     * @return void
     */
    public function handle(GetCurrentTime $event)
    {
        //
    }
}
