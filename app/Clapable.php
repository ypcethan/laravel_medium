<?php

namespace App;

trait Clapable
{
    public function claps()
    {
        return $this->belongsToMany(User::class, "claps", 'user_id', 'post_id');
    }

    public function clap(Post $post)
    {
        // if ($this->claps()->where('post_id', $post->id)->exist()) {

        // }
        $this->claps()->attach($post);
    }
}
