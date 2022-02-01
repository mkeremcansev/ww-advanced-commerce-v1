<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();
        return view('web.page.index', ['page' => $page]);
    }
}
