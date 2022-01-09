<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function destroy($id)
    {
        ProductImage::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
