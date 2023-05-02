<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;


class MakeOrderController extends Controller
{
    public function __invoke(){

        $cartProducts = CartProduct::all();
        $carts = Cart::all();

        $userId = auth()->user()->id;

        $cartId = $carts->firstWhere('user_id', $userId)->id;

        $needCartProducts = $cartProducts->where('cart_id', $cartId);
        $allProducts = Product::all();

        $products = [];
        foreach ($needCartProducts as $needCartProduct){

            array_push($products, $allProducts->firstWhere('id', $needCartProduct->product_id));

        }
        $profiles = Profile::all();
        $profile = $profiles->firstWhere('user_id', $userId);
        $order = Order::create([
            'state_id'=>1,
            'delivery_type_id'=>2,
            'profile_id'=>$profile->id,
        ]);
        foreach ($products as $product){

            $newOrderProduct = OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
            ]);

        }

        return redirect()->route('index');
    }
}
