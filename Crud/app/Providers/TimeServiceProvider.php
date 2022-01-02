<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TimeTesting\Time;
class TimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Time',function(){
                return new Time();
            });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
