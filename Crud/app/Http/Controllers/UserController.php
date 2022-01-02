<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertRecords()
    {
        $phone = new Phone();
        $phone->phone = '123456789';
        $user = new User();
        $user->name = 'harshal mahajan';
        $user->email = 'harshal@gmail.com';
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Record inserted successfully";

    }
}
