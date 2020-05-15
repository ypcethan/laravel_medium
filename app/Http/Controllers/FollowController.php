<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowController extends Controller
{
    //
    public function create(User $user)
    {
        auth()->user()->toggleFollow($user);
        return back();
    }
}
