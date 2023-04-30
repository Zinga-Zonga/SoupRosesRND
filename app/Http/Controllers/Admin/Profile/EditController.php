<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;


class EditController extends Controller
{
    public function __invoke(Profile $profile){

        $roles = Role::all();
        $users = User::all();
       return view('admin.profiles.edit', compact('profile', 'roles', 'users'));
    }
}
