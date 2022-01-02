<?php

namespace App\Listner;

use App\Events\GetEmployee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GetEmployeeData
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
     * @param  \App\Events\GetEmployee  $event
     * @return void
     */
    public function handle(GetEmployee $event)
    {
        
        echo $event->employee;
    }
}
