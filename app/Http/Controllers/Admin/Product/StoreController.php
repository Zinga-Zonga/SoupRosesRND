<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(Request $request){

       $data = request()->validate([
           'title' => 'required|string',
           'description' => 'string',
           'price' => 'required|integer',
           'image' => 'required|file'
       ]);



       Profile::firstOrCreate($data);
       return redirect()->route('admin.products.index');

    }
}
