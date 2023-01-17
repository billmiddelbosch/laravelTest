<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function submit(Request $request)
    {
        $validatedInput = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:3|max:6'
            ]
        );
        $mail = request('email');
        $password = request('password');
        return 'Password: ' . $password . '<br> Email: ' . $mail;
        //        return $request->all();
    }
}
