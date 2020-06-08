<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Gate;

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
        if (Gate::denies('update', $user)) {
            return redirect()->route('profile-edit', ['user' => auth()->user()]);
        }
        return view('profile.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate(['username' => 'min:3', 'avatar' => 'file']);

        if (request()->has('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }
        // dd($attributes);
        $user->update($attributes);
        return redirect()->route('profile-index', ['is_recommended' => null, 'user' => $user]);
    }
}
