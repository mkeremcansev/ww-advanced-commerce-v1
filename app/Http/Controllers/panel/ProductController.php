<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with([
            'getOneProductAttributes',
            'getAllProductVariants.getAllVariantAttributes',
            'getOneProductImages',
            'getOneProductCategory',
            'getOneProductBrand',
        ])->get();
        return view('panel.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('panel.product.create.index', ['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            $product = Product::create([
                'hash' => Str::random(15),
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
            ]);
            $product->getOneProductAttributes()->create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'hash' => Str::random(15),
                'price' => $request->price,
                'discount' => $request->discount,
                'sku' => Helper::sku($request->title)
            ]);
            foreach ($request->informations as $information) {
                $product->getAllProductInformations()->create([
                    'title' => $information['information_title'],
                    'description' => $information['information_description'],
                    'hash' => Str::random(15)
                ]);
            }
            foreach ($request->list as $list) {
                $variant = $product->getAllProductVariants()->create([
                    'title' => $list["variant"],
                    'hash' => Str::random(15)
                ]);
                foreach ($list["attribute"] as $attribute) {
                    $variant->getAllVariantAttributes()->create([
                        'title' => $attribute["attribute_title"],
                        'stock' => $attribute["attribute_stock"],
                        'price' => $attribute["attribute_price"],
                        'hash' => Str::random(15)
                    ]);
                }
            }
            foreach ($request->images as $image) {
                $product->getAllProductImages()->create([
                    'image' => Helper::imageUpload($image, 'storage'),
                    'hash' => Str::random(15),
                ]);
            }
        });
        return back()->with('success', __('words.created_action_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('getOneProductAttributes', 'getAllProductInformations', 'getAllProductVariants.getAllVariantAttributes', 'getAllProductImages')->findOrFail($id);
        $brands = Brand::all();
        return view('panel.product.update.index', ['product' => $product, 'brands' => $brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $product = Product::findOrFail($id);
            $product->update([
                'hash' => Str::random(15),
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
            ]);
            $product->getOneProductAttributes()->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'hash' => Str::random(15),
                'price' => $request->price,
                'discount' => $request->discount,
                'sku' => Helper::sku($request->title)
            ]);
            $product->getAllProductInformations()->delete();
            foreach ($request->informations as $information) {
                $product->getAllProductInformations()->create([
                    'title' => $information['information_title'],
                    'description' => $information['information_description'],
                    'hash' => Str::random(15)
                ]);
            }
            $product->getAllProductVariants()->delete();
            foreach ($request->list as $list) {
                $variant = $product->getAllProductVariants()->create([
                    'title' => $list["variant"],
                    'hash' => Str::random(15)
                ]);
                foreach ($list["attribute"] as $attribute) {
                    $variant->getAllVariantAttributes()->create([
                        'title' => $attribute["attribute_title"],
                        'stock' => $attribute["attribute_stock"],
                        'price' => $attribute["attribute_price"],
                        'hash' => Str::random(15)
                    ]);
                }
            }
            if ($request->hasFile('images')) {
                foreach ($request->images as $image) {
                    $product->getAllProductImages()->create([
                        'image' => Helper::imageUpload($image, 'storage'),
                        'hash' => Str::random(15),
                    ]);
                }
            }
        });
        return back()->with('success', __('words.updated_action_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
