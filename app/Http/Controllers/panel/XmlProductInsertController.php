<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\XmlProductInsertRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Product;

class XmlProductInsertController extends Controller
{
    public function store(XmlProductInsertRequest $request){
        $object = simplexml_load_string(file_get_contents(asset(Helper::xmlUpload($request->xml, 'xml'))));
        DB::transaction(function () use ($object) {
            foreach($object->products as $object) {
                $product = Product::create([
                    'hash' => Str::random(15),
                    'category_id' => $object->category_id,
                    'brand_id' => $object->brand_id,
                ]);
                $product->getOneProductAttributes()->create([
                    'title' => $object->title,
                    'slug' => Helper::slug($object->title),
                    'description' => $object->description,
                    'hash' => Str::random(15),
                    'price' => $object->price,
                    'discount' => $object->discount,
                    'sku' => Helper::sku($object->title)
                ]);
                foreach ($object->information as $information) {
                    foreach($information->attribute as $attribute){
                        $product->getAllProductInformations()->create([
                            'title' => $attribute->title,
                            'description' => $attribute->description,
                            'hash' => Str::random(15)
                        ]);
                    }
                }
                foreach ($object->variant as $list) {
                    $variant = $product->getAllProductVariants()->create([
                        'title' => $list->title,
                        'hash' => Str::random(15)
                    ]);
                    foreach ($list->attribute as $attribute) {
                        $variant->getAllVariantAttributes()->create([
                            'title' => $attribute->title,
                            'stock' => $attribute->stock,
                            'price' => $attribute->price,
                            'hash' => Str::random(15)
                        ]);
                    }
                }
             }

        });
        return back()->with('success', __('words.xml_insert_action_success'));
    }

    public function download(){
        if(file_exists(storage_path('sample_xml_file.xml'))){
            return response()->download(storage_path('sample_xml_file.xml'));
        }
    }
}
