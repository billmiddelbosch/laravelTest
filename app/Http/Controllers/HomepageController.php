<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $name = "Bill";
        $fruits = array('apple', 'banana', 'orange');
        return view('homepage', compact('name', 'fruits'));
    }
}
