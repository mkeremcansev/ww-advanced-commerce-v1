<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Campaign;
use App\Models\Category;
use App\Models\Product;
use App\Models\Showcase;
use App\Models\Slider;
use App\Models\Story;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomepageController extends Controller
{
    public function index()
    {
        $with = ['getOneProductAttributes', 'getOneProductImages', 'getAllProductReviews'];
        Cache::remember('r_categories', 60 * 60, function () {
            return  Category::with('getAllCategoryProducts')->inRandomOrder()->get();
        });
        Cache::remember('r_products', 60 * 60, function () use ($with) {
            return Product::with($with)->whereStatus(1)->inRandomOrder()->limit(10)->get();
        });
        Cache::remember('n_products', 60 * 60, function () use ($with) {
            return Product::with($with)->whereStatus(1)->where('created_at', '>=', Carbon::now()->subDays(7))->limit(10)->get();
        });
        Cache::remember('d_products', 60 * 60, function () use ($with) {
            return
                Product::with($with)->whereStatus(1)->whereHas('getOneProductAttributes', function ($query) {
                    $query->where('discount', '>', 0);
                })->limit(10)->get();
        });
        Cache::remember('p_products', 60 * 60, function () use ($with) {
            return
                Product::with($with)->whereStatus(1)->whereHas('getAllProductReviews', function ($query) {
                    $query->select('product_id')->groupBy('product_id')->havingRaw('round(avg(rating)) >= 4');
                })->limit(10)->get();
        });
        Cache::remember('r_campaigns', 60 * 60, function () {
            return
                Campaign::whereStatus(1)->inRandomOrder()->limit(6)->get();
        });
        Cache::remember('sliders', 60 * 60, function(){
            return Slider::get();
        });
        Cache::remember('showcases', 60 * 60, function(){
            return Showcase::with('getAllShowcaseAttributes.getOneShowcaseAttributeCategory')->get();
        });
        Cache::remember('stories', 60 * 60, function(){
            return Story::with('getAllStoryAttributes')->get();
        });
        Cache::remember('announcements', 60 * 60, function(){
            return Announcement::get();
        });
        return view('web.homepage.index');
    }
}
