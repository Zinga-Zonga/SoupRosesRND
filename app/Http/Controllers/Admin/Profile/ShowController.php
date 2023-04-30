<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;



class ShowController extends Controller
{
    public function __invoke(Profile $product){



       return view('admin.products.show', compact('product'));

    }
}
