<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $guarded = [];
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
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->content), 30);
    }

    public function getImageAttribute()
    {
        if (!$this->cover_image) {
            return "https://picsum.photos/id/$this->id/500/400";
        }
        // $path =Storage::disk('s3')->url($this->cover_image);
        $path = Storage::disk('s3')->url($this->cover_image);
        return $path;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function clappedUsers()
    {
        return $this->belongsToMany("App\User", 'claps', 'post_id', 'user_id')
            ->withPivot('clapCount');
    }

    public function getTotalClapsAttribute()
    {
        return $this->clappedUsers->pluck('pivot.clapCount')->sum();
    }
}
