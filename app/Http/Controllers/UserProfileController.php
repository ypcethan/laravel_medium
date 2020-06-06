<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
    //
    public function index(User $user, $state = null)
    {
        $state = ($state === 'is_recommended') ? true : false;
        return view('profile.index', ['is_recommended' => $state, 'user' => $user]);
    }

    public function edit(User $user)
    {
    }
}
