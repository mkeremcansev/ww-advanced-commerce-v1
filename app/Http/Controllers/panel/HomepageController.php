<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function down()
    {
        \Artisan::call('down');
        return back()->with('success', __('words.maintenance_on_action_success'));
    }

    public function up()
    {
        \Artisan::call('up');
        return back()->with('success', __('words.maintenance_off_action_success'));
    }
}
