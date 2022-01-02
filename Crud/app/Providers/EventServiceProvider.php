<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\SendMail;
use App\Listner\SendMailFired;
use App\Events\GetEmployee;
use App\Events\SendEmail;
use App\Listner\GetEmployeeData;
use App\Listner\MailUserSend;
use App\Listner\GetCurrentTimeData;
use App\Events\GetCurrentTime;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendMail::class => [
            SendMailFired::class
        ],
        GetEmployee::class => [

            GetEmployeeData::class
        ],
        GetCurrentTime::class =>[

            GetCurrentTimeData::class
        ]
              
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
