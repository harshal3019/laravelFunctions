<?php

namespace App\TimeTesting;
use Carbon\Carbon;

class Time
{
	public static function process()
	{
		return Carbon::now();
	}
}