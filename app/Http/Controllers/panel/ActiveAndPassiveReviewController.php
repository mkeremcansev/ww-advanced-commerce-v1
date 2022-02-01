<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActiveAndPassiveReviewUpdateRequest;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class ActiveAndPassiveReviewController extends Controller
{
    public function active()
    {
        $reviews = ProductReview::with(['getOneReviewUser', 'getOneReviewProduct'])->whereStatus(1)->get();
        return view('panel.review.active.index', ['reviews' => $reviews]);
    }

    public function passive()
    {
        $reviews = ProductReview::with(['getOneReviewUser', 'getOneReviewProduct'])->whereStatus(0)->get();
        return view('panel.review.passive.index', ['reviews' => $reviews]);
    }

    public function update(ActiveAndPassiveReviewUpdateRequest $request)
    {
        $review = ProductReview::findOrFail($request->id);
        $status = $review->status  ? 0 : 1;
        $review->update([
            'status' => $status
        ]);
        return response()->json([
            'success' => 'success'
        ]);
    }

    public function destroy($id)
    {
        ProductReview::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
