<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerClientValidation extends Controller
{
    public function index()
    {
        return view('ServerClientValidation');
    }

    public function register(Request $request)
    {

        $request->validate([

            'firstname'=>'required|min:3',
             'lastname' => 'required|min:3',
             'email' => 'required|email',
             'password' => 'min:6|max:13|required_with:password_confirmation|same:password_confirmation',
             'phone' => 'required|max:10',
             'image_upload' => 'required|mimes:jpg,jpeg,gif,svg|max:2048'
        ]);
        return "Form submitted Successfully!";
        
    }
}
