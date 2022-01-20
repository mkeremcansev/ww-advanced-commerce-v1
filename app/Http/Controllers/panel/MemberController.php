<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::role('member')->get();
        return view('panel.user.member.index', ['members' => $members]);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
