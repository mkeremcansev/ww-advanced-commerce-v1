<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function store(SearchStoreRequest $request)
    {
        $products = Product::whereStatus(1)
            ->with([
                'getOneProductAttributes',
                'getAllProductReviews',
                'getOneProductImages'
            ])
            ->whereHas('getOneProductAttributes', function ($query) use ($request) {
                $query
                    ->where('title', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('sku', 'LIKE', '%' . $request->search . '%');
            })
            ->orWhereHas('getAllProductInformations', function ($query) use ($request) {
                $query
                    ->where('title', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $request->search . '%');
            })
            ->orWhereHas('getOneProductCategory', function ($query) use ($request) {
                $query
                    ->where('title', 'LIKE', '%' . $request->search . '%');
            })
            ->orWhereHas('getOneProductBrand', function ($query) use ($request) {
                $query
                    ->where('title', 'LIKE', '%' . $request->search . '%');
            })
            ->orWhereHas('getAllProductVariants', function ($query) use ($request) {
                $query
                    ->whereHas('getAllVariantAttributes', function ($query) use ($request) {
                        $query
                            ->where('title', 'LIKE', '%' . $request->search . '%');
                    });
            })->paginate(15)->withQueryString();
        return view('web.products.search.index', ['products' => $products]);
    }
}
