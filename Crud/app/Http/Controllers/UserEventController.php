<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\LoginHistory;
use App\Models\UserHistory;
use App\Events\SendEmail;
use App\Models\Employee;
use App\Events\GetEmployee;
use App\Events\GetCurrentTime;
use Carbon\Carbon;

class UserEventController extends Controller
{
    public function eventTarget()
    {
        event(new SendMail("abc@gmail.com"));
    }

    public function eventTarg()
    {
        $employee = Employee::all();
        event(new GetEmployee($employee));
    }

    public function currentTime()
    {
        $curr_time = Carbon::now();
        event(new GetCurrentTime($curr_time));
    }
    


    
}
