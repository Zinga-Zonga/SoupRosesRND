<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Request;


class UpdateController extends Controller
{
    public function __invoke(Request $request, Profile $profile)
    {

        $profileData = request()->validate([
            'phone_number' => '',
            'address' => '',
            'total_bought' => '',
        ]);

        $userData = request()->validate([
            'role_id' => ''
        ]);

        $user = User::find($profile->user_id);
        $user->update($userData);

        $profile->update($profileData);


        return redirect()->route('admin.profiles.index');

    }
}
