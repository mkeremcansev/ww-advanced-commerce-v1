<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $earrings = Order::where('status', '>', 0)->sum('total');
        $products = Product::count();
        $users = User::count();
        $categories = Category::count();
        $reviews = ProductReview::count();
        return view('panel.homepage.index', [
            'earrings'=>$earrings,
            'products'=>$products,
            'users'=>$users,
            'categories'=>$categories,
            'reviews'=>$reviews
        ]);
    }

    public function down()
    {
        \Artisan::call('down');
        return back()->with('success', __('words.maintenance_on_action_success'));
    }

    public function up()
    {
        \Artisan::call('up');
        return back()->with('success', __('words.maintenance_off_action_success'));
    }
}
