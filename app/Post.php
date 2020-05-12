<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function path()
    {
        return route('posts-show', ['user' => $this->user->username, 'post' => $this->slug]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getSlugAttribute()
    {
        $trimedTitle = preg_replace('!\s+!', '-', $this->title);
        return  strtolower($trimedTitle);
    }
}
