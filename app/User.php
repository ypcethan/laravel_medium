<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Followable;
use App\Clapable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'email', 'password', 'username', 'avatar'
  ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
  ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    'email_verified_at' => 'datetime',
  ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function claps()
    {
        return $this->belongsToMany('App\Post', 'claps', 'user_id', 'post_id')
      ->withPivot('clapCount');
    }

    public function clapped(Post $post)
    {
        return $this->claps()->where('post_id', $post->id)->exists();
    }
    public function clap(Post $post)
    {
        if ($this->clapped($post)) {
            $count = $this->claps()->find($post->id)->pivot->clapCount;
            $this->claps()->updateExistingPivot($post->id, ['clapCount' => $count += 1]);
        } else {
            $this->claps()->attach($post);
        }
    }

    public function getAvatarAttribute($value)
    {
        if ($value) {
            $path = Storage::disk('s3')->url($value);
            return  $path;
        }
        return "https://randomuser.me/api/portraits/med/men/{$this->id}.jpg";
    }
}
