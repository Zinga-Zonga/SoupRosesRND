<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;



class DeleteController extends Controller
{
    public function __invoke(Profile $profile){
        $profile->delete();
        return redirect()->route('admin.profiles.index');
    }
}
