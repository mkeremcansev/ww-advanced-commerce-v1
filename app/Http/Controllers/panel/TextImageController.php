<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextImageController extends Controller
{
    public function store(Request $request)
    {
        $file = Helper::imageUpload($request->file, 'storage');
        return response()->json(['location' => asset($file)]);
    }
}
