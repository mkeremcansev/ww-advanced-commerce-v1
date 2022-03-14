<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCargoUpdateRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderCargoController extends Controller
{
    public function update(OrderCargoUpdateRequest $request, $id){
        Order::findOrFail($id)->update($request->validated());
        return back()->with('success', __('words.updated_action_success'));
    }
}
