<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;


class CreateController extends Controller
{
    public function __invoke(){

       return view('admin.products.create');
    }
}
