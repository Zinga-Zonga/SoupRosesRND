<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke(){

       $profiles = Profile::paginate(10);
       $users = User::all();
       $roles = Role::all();
       return view('admin.profiles.index', compact('profiles','users','roles'));

    }
}
