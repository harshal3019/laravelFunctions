<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientValidationController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function registerSubmit(Request $request)
    {
        return "Form Submitted Successfully!";
    }
    
}
