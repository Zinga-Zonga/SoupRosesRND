<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke(){

       $products = Product::paginate(10);;

       return view('admin.products.index', compact('products'));

    }
}
