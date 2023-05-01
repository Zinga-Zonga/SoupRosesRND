<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;


class CreateController extends Controller
{
    public function __invoke(){
        $roles = Role::all();
       return view('admin.products.create', compact('roles'));
    }
}
