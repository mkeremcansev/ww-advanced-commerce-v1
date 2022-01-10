<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
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
        if (!$this->app->runningInConsole()) :
            view()->share('categories', Category::where('parent_id', null)->with('getAllCategoriesCollection')->get());
            view()->share('r_categories', Category::with('getAllCategoryProducts')->inRandomOrder()->get());
            view()->share('r_products', Product::with('getOneProductAttributes', 'getAllProductImages',)->inRandomOrder()->limit(10)->get());
            view()->share('brands', Brand::get());
        endif;
    }
}
