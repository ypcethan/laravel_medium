<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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

    public function getPublishedDateAttribute()
    {
        return Carbon::parse($this->updated_at)->toFormattedDateString();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function clappedUsers()
    {
        return $this->belongsToMany("App\User", 'claps', 'post_id', 'user_id');
    }
}
