<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class HttpController extends Controller
{
    public function index(Request $request)
    {
        //return $request->method();
        //return $request->path();
        //return $request->url();
        return $request->fullUrl();
    }
}
