<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            view()->share('categories', Category::where('parent_id', null)->with('getAllCategoriesCollection')->get());
            view()->share('r_categories_count', Cache::get('r_categories')->count());
            view()->share('r_products_count', Cache::get('r_products')->count());
            view()->share('n_products_count', Cache::get('n_products')->count());
            view()->share('p_products_count', Cache::get('p_products')->count());
            view()->share('d_products_count', Cache::get('d_products')->count());
            view()->share('r_campaigns_count', Cache::get('r_campaigns')->count());
        }
    }
}
