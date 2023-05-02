<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
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



       return view('cart.index', compact('products'));

    }
}
