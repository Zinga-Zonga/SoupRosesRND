<?php

namespace App\Http\Controllers\Admin\OrderProduct;

use App\Http\Controllers\Controller;
use App\Models\DeliveryType;
use App\Models\Order;
use App\Models\OrderProduct;

use App\Models\OrderState;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;


class EditController extends Controller
{
    public function __invoke(OrderProduct $orderProduct)
    {

        $profiles = Profile::all();
        $orders = Order::all();
        $ordersProducts = OrderProduct::all();
        $products = Product::all();
        $orderStates = OrderState::all();
        $deliveryTypes = DeliveryType::all();
        $users = User::all();

        return view('admin.orders.edit', compact('orderProduct','ordersProducts','profiles','orders','products','orderStates','deliveryTypes','users'));
    }
}
