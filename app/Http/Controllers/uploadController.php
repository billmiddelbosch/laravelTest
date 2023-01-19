<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function uploadPOST(Request $request)
    {
        $request->file->store('public');
        return back()->with('uploaded', 'File uploaded!!');
    }
}
