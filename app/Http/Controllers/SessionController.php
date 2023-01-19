<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession(Request $request)
    {
        if ($request->session()->has('name')) {
            return $request->session()->get('name');
        } else {
            return 'Session has no name yet';
        }
    }

    public function setSession(Request $request)
    {
        $request->session()->put('name', 'bill');
    }

    public function removeSession(Request $request)
    {
        $request->session()->forget('name');
    }
}
