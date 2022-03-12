<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductMultiplePriceUpdateRequest;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductMultiplePriceController extends Controller
{
    public function update(ProductMultiplePriceUpdateRequest $request){
        if($request->up){
            if($request->all_products AND $request->variant){
                $product = Product::with(['getOneProductAttributes', 'getAllProductVariants.getAllVariantAttributes'])->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount + multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                    foreach($p->getAllProductVariants as $v){
                        foreach($v->getAllVariantAttributes as $a){
                            $a->update([
                                'price'=>$a->price + multipleProductPriceEditPercent($a->price, $request->value)
                            ]);
                        }
                    }
                }
            } else if(is_null($request->all_products) AND $request->variant){
                $product = Product::with(['getOneProductAttributes', 'getAllProductVariants.getAllVariantAttributes'])->where('category_id', $request->category_id)->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount + multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                    foreach($p->getAllProductVariants as $v){
                        foreach($v->getAllVariantAttributes as $a){
                            $a->update([
                                'price'=>$a->price + multipleProductPriceEditPercent($a->price, $request->value)
                            ]);
                        }
                    }
                }
            } else if(is_null($request->variant) AND is_null($request->all_products)){
                $product = Product::with(['getOneProductAttributes'])->where('category_id', $request->category_id)->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount + multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                }
            } else if($request->all_products AND is_null($request->variant)){
                $product = Product::with(['getOneProductAttributes'])->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount + multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price + multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                }
            }
        } else if($request->down){
            if($request->all_products AND $request->variant){
                $product = Product::with(['getOneProductAttributes', 'getAllProductVariants.getAllVariantAttributes'])->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount - multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                    foreach($p->getAllProductVariants as $v){
                        foreach($v->getAllVariantAttributes as $a){
                            $a->update([
                                'price'=>$a->price - multipleProductPriceEditPercent($a->price, $request->value)
                            ]);
                        }
                    }
                }
            } else if(is_null($request->all_products) AND $request->variant){
                $product = Product::with(['getOneProductAttributes', 'getAllProductVariants.getAllVariantAttributes'])->where('category_id', $request->category_id)->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount - multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                    foreach($p->getAllProductVariants as $v){
                        foreach($v->getAllVariantAttributes as $a){
                            $a->update([
                                'price'=>$a->price - multipleProductPriceEditPercent($a->price, $request->value)
                            ]);
                        }
                    }
                }
            } else if(is_null($request->variant) AND is_null($request->all_products)){
                $product = Product::with(['getOneProductAttributes'])->where('category_id', $request->category_id)->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount - multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                }
            } else if($request->all_products AND is_null($request->variant)){
                $product = Product::with(['getOneProductAttributes'])->get();
                foreach($product as $p){
                    if($p->getOneProductAttributes->discount){
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value),
                            'discount'=>$p->getOneProductAttributes->discount - multipleProductPriceEditPercent($p->getOneProductAttributes->discount, $request->value)
                        ]);
                    }else{
                        $p->getOneProductAttributes->update([
                            'price'=>$p->getOneProductAttributes->price - multipleProductPriceEditPercent($p->getOneProductAttributes->price, $request->value)
                        ]);
                    }
                }
            }
        }
        return back()->with('success', __('words.updated_action_success'));
    }
}
