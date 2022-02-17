<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::with(['getAllOrderAttributes','getOneUsers'])->get();
        return view('panel.order.index', ['orders'=>$orders]);
    }

    public function update(Request $request){
        Order::findOrFail($request->id)->update([
            'status'=>$request->status
        ]);
        return response()->json([
            'status'=>true
        ]);
    }

    public function show($id){
        $order = Order::with(['getAllOrderAttributes','getOneUsers'])->findOrFail($id);
        return view('panel.order.detail.index', ['order'=>$order]);
    }
}
