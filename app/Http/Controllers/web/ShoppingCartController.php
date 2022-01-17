<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShoppingCartCreateRequest;
use App\Http\Requests\ShoppingCartStoreRequest;
use App\Http\Requests\ShoppingCartUpdateRequest;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Variant;
use App\Models\VariantAttribute;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCartController extends Controller
{
    public function store(ShoppingCartStoreRequest $request)
    {
        $product = Product::whereStatus(1)->with('getOneProductAttributes', 'getAllProductVariants')->whereHash($request->product_hash)->first();
        $price = null;
        $product->getOneProductAttributes->discount
            ? $price = $product->getOneProductAttributes->discount
            : $price = $product->getOneProductAttributes->price;

        $attributes = VariantAttribute::whereIn('hash', $request->variants)->get();
        if ($attributes->count() != $product->getAllProductVariants()->count()) {
            return response()->json([
                'status' => 'error',
                'message' => __('words.variation_required'),
            ]);
        } else {
            foreach ($attributes as $attr) {
                $price = $price + $attr->price;
            }
            Cart::instance('cart')->add([
                'id' => $product->id,
                'name' => $product->getOneProductAttributes->title,
                'price' => $price,
                'qty' => $request->quantity,
                'options' => [
                    'variants' => $attributes
                ]
            ])->associate(Product::class);
            return response()->json([
                'status' => 'success',
                'message' => __('words.shopping_cart_action_success'),
            ]);
        }
    }
    public function update(ShoppingCartUpdateRequest $request)
    {
        foreach ($request->rowId as $key => $r) {
            Cart::instance('cart')->update($r, $request->quantity[$key]);
        }
        return back()->with('success', __('words.updated_action_success'));
    }
    public function delete($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        return back()->with('success', __('words.deleted_action_success'));
    }
    public function destroy()
    {
        Cart::instance('cart')->destroy();
        return back()->with('success', __('words.clear_action_success'));
    }
}
