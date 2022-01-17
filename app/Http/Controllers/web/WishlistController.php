<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\WishlistStoreRequest;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function store(WishlistStoreRequest $request)
    {
        $product = Product::whereStatus(1)->with('getOneProductAttributes')->whereHash($request->product_hash)->first();
        $price = null;
        $product->getOneProductAttributes->discount
            ? $price = $product->getOneProductAttributes->discount
            : $price = $product->getOneProductAttributes->price;
        Cart::instance('wishlist')->add([
            'id' => $product->id,
            'name' => $product->getOneProductAttributes->title,
            'price' => $price,
            'qty' => 1,
        ])->associate(Product::class);
        return response()->json([
            'success' => __('words.favorite_added_action_success'),
        ]);
    }
    public function delete($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        return back()->with('success', __('words.deleted_action_success'));
    }
}
