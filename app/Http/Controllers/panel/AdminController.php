<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::role('admin')->get();
        return view('panel.user.admin.index', ['admins' => $admins]);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
