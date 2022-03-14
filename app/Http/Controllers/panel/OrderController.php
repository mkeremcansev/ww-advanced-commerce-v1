<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderUpdateRequest;
use App\Jobs\OrderUpdate;
use App\Models\Cargo;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::with(['getAllOrderAttributes','getOneUsers'])->get();
        return view('panel.order.index', ['orders'=>$orders]);
    }

    public function update(OrderUpdateRequest $request){
        $order = Order::findOrFail($request->id);
        $order->update([
            'status'=>$request->status
        ]);
        dispatch(new OrderUpdate(User::findOrFail($order->user_id), $order));
        return response()->json([
            'status'=>true
        ]);
    }

    public function show($id){
        $order = Order::with(['getAllOrderAttributes','getOneUsers'])->findOrFail($id);
        $cargos = Cargo::get();
        return view('panel.order.detail.index', ['order'=>$order, 'cargos'=>$cargos]);
    }
}
