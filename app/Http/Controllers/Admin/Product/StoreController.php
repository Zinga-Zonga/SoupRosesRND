<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
       if(key_exists('image', $data) === true){
           $data['image'] = Storage::disk('public')->put('/images', $data['image']);
       }


       Product::firstOrCreate($data);
       return redirect()->route('admin.products.index');

    }
}
