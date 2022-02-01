<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStatusUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductStatusController extends Controller
{
    public function update(ProductStatusUpdateRequest $request)
    {
        $product = Product::findOrFail($request->id);
        $status = $product->status  ? 0 : 1;
        $product->update([
            'status' => $status
        ]);
        return response()->json([
            'success' => 'success'
        ]);
    }
}
