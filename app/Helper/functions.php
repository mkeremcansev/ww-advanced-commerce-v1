<?php

use Carbon\Carbon;

function getMoneyOrder($price)
{
    return number_format($price, 0, '.', '.') . __('words.currency_unit');
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
            'title' => __('words.new'),
            'code' => 'new',
            'value' => false
        ],
        [
            'status' => round((float)$popular) >= 4 ? true : false,
            'title' => __('words.popular'),
            'code' => 'rate',
            'value' => false
        ],
        [
            'status' => true,
            'title' => __('words.best_seller'),
            'code' => 'order',
            'value' => false
        ]
    ];
    return $labels;
}

function getShowMore($text)
{
    return substr($text, 0, 180);
}
