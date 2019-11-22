<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $request)
    {
        $order = new Order();
        $order->fill($request->all());
        $order->save();

        return redirect()
            ->route('services');
    }
}
