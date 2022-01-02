<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MulitStepFormController extends Controller
{
    public function index()
    {
        return view('multistepform');
    }
}
