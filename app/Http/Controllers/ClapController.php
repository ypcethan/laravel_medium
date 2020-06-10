<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ClapController extends Controller
{
    //
    public function store(Post $post)
    {
        //    dd($post);
        auth()->user()->clap($post);
    }

    public function showCount(Post $post)
    {
        // return $post->clappedUsers()->count();
        return $post->clappedUsers->pluck('pivot.clapCount')->sum();
    }
}
