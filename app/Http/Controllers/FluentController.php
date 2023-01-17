<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        $slice = Str::of('Hello, how are your')->after(',');
        $slice2 = Str::of('https://test.nl/bill')->afterlast('/');
        $slice3 = Str::of($slice2)->append('/helloWorld');
        echo $slice3 . '<br>';
        echo $slice2;
    }
}
