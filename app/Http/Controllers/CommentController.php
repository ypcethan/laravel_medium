<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class CommentController extends Controller
{
    //
    public function store(User $user, Post $post)
    {
        $attributes = request()->validate(['content' => 'required']);
        Comment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'content' => $attributes['content']
        ]);
        return back();
    }

    public function show(Post $post)
    {
        return $post->comments()->with('user')->latest()->get();
    }
}
