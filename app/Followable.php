<?php

namespace App;

trait Followable
{
    public function follows()
    {
        return  $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(user $user)
    {
        $this->follows()->attach($user);
    }

    public function unfollows(User $user)
    {
        $this->follows()->detach($user);
    }


    public function following(User $user)
    {
        return $this->follows()
      ->where('following_user_id', $user->id)
      ->exists();
    }
}
