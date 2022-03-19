<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $order = Order::where('status', '>', 0)->get();
        $earrings = $order->sum('total');
        $products = Product::count();
        $users = User::count();
        $categories = Category::count();
        $reviews = ProductReview::count();
        $week = $order->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->sum('total');
        $month = $order->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->sum('total');
        return view('panel.homepage.index', [
            'week'=>$week,
            'month'=>$month,
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
