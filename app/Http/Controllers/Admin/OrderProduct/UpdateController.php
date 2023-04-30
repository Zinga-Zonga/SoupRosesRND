<?php

namespace App\Http\Controllers\Admin\OrderProduct;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Request;


class UpdateController extends Controller
{
    public function __invoke(Request $request, OrderProduct $orderProduct)
    {

        $stateData = request()->validate([
            'state_id' => ''
        ]);

        $order = Order::find($orderProduct->order_id);
        $order->update($stateData);







        return redirect()->route('admin.orders.index');

    }
}
