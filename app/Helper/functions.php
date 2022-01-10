<?php

use Carbon\Carbon;

function getMoneyOrder($price)
{
    return number_format($price, 0, '.', '.') . __('words.currency_unit');
}

function getDiscountCalc($price, $discount)
{
    $action = $price - $discount;
    $result = $action * 100 / $price;
    return  '%' . round($result);
}
function getProductLabel($discount, $price, $created_at, $popular = null, $most = null)
{
    $labels = [
        [
            'status' => $discount ? true : false,
            'title' => false,
            'code' => 'off',
            'value' => getDiscountCalc($price, $discount)
        ],
        [
            'status' => $created_at >= Carbon::today() ? true : false,
            'title' => 'Yeni',
            'code' => 'new',
            'value' => false
        ],
        [
            'status' => true,
            'title' => 'Popüler',
            'code' => 'rate',
            'value' => false
        ],
        [
            'status' => true,
            'title' => 'Çok Satılan',
            'code' => 'order',
            'value' => false
        ]
    ];
    return $labels;
}
