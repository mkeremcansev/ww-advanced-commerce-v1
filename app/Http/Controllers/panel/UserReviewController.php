<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    public function show($id)
    {
        $user = User::with('getAllUserReviews')->findOrFail($id);
        return view('panel.user.review.index', ['user' => $user]);
    }

    public function update($id, $status)
    {
        ProductReview::findOrFail($id)->update([
            'status' => $status
        ]);
        return back()->with('success', __('words.updated_action_success'));
    }

    public function destroy($id)
    {
        ProductReview::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
