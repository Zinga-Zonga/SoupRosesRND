<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;


class ShowController extends Controller
{
    public function __invoke(Product $product){



       return view('admin.products.show', compact('product'));

    }
}
