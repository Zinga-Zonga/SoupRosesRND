<?php

namespace App\Http\Controllers\Admin\OrderProduct;

use App\Http\Controllers\Controller;
use App\Models\DeliveryType;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderState;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke(){

        $profiles = Profile::all();
        $orders = Order::all();
        $ordersProducts = OrderProduct::all();
        $products = Product::all();
        $orderStates = OrderState::all();
        $deliveryTypes = DeliveryType::all();
        $users = User::all();

        $readyForUseOrderProducts = $ordersProducts->sortBy('order_id')->groupBy('order_id');



       return view('admin.orders.index', compact('profiles','orders','ordersProducts','products','orderStates','deliveryTypes','users','readyForUseOrderProducts'));

    }
}
