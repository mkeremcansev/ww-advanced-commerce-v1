<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MigrateController extends Controller
{
    public function update(){
        \Artisan::call('migrate');
        return back()->with('success', __('words.updated_action_success'));
    }
}
