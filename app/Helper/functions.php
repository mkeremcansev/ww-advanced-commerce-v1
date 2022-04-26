<?php

use Carbon\Carbon;

function getMoneyOrder($price)
{
    return number_format($price, 2, '.', '.') . __('words.currency_unit');
}

function getCheckoutMoneyOrder($price)
{
    return str_replace(',', '', $price);
}

function getMoneyOrderShoppingCart($price)
{
    return str_replace(',', '.', $price) . __('words.currency_unit');
}

function getDiscountCalc($price, $discount)
{
    $action = $price - $discount;
    $result = $action * 100 / $price;
    return  '%' . round($result);
}
function getProductLabel($discount, $price, $created_at, $popular = null)
{
    $labels = [
        [
            'status' => $discount ? true : false,
            'title' => false,
            'code' => 'off',
            'value' => getDiscountCalc($price, $discount)
        ],
        [
            'status' => $created_at >= Carbon::now()->subDays(7) ? true : false,
            'title' => __('words.new'),
            'code' => 'new',
            'value' => false
        ],
        [
            'status' => round((float)$popular) >= 4 ? true : false,
            'title' => __('words.popular'),
            'code' => 'rate',
            'value' => false
        ]
    ];
    return $labels;
}

function orderStatusData($status){
    $data = [
        [
            'status'=>$status == 0 ? true : false,
            'text'=>__('words.order_failed'),
            'value'=> 0
        ],
        [
            'status'=>$status == 1 ? true : false,
            'text'=>__('words.order_saved'),
            'value'=> 1
        ],
        [
            'status'=>$status == 2 ? true : false,
            'text'=>__('words.order_prepared'),
            'value'=> 2   
        ],
        [
            'status'=>$status == 3 ? true : false,
            'text'=>__('words.order_shepped'),
            'value'=> 3   
        ],
        [
            'status'=>$status == 4 ? true : false,
            'text'=>__('words.order_delivered'),
            'value'=> 4   
        ]
    ];
    return $data;
}

function orderCargoWhere($url, $code){
    return $url.$code;
}
function getShowMore($text)
{
    return substr($text, 0, 180);
}

function orderAccountStatus($status)
{
    $order = [
        [
            'status' => $status >= 1 ? true : null,
            'text' => __('words.order_saved')
        ],
        [
            'status' => $status >= 2 ?  true : null,
            'text' => __('words.order_prepared')
        ],
        [
            'status' => $status >= 3 ? true : null,
            'text' => __('words.order_shepped')
        ],
        [
            'status' => $status >= 4 ?  true : null,
            'text' => __('words.order_delivered')
        ]
    ];
    return $order;
}

function showcaseColonCalc($value){
    return 12 / $value;
}

function multipleProductPriceEditPercent($price, $value){
    return abs((int) ($price / 100 * $value));
}

function getStockControl($variants){
    $value = null;
    foreach($variants as $v){
        foreach($v->getAllVariantAttributes as $a){
            $value += $a->stock;
        }
    }
    return $value == 0 ? 'product-disable ' : false;
}