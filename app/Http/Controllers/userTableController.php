<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userTableController extends Controller
{
    public function getAllusers()
    {
        $users = User::paginate(10);
        return view('users', compact('users'));
    }
}
