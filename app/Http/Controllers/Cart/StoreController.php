<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(Request $request){

        $data = request()->validate([
            'product_id' => '',
            'cart_id' => ''
        ]);




       CartProduct::firstOrCreate($data);
       return redirect()->route('index');

    }
}
