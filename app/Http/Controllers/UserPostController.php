<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class UserPostController extends Controller
{
    //
    protected $publishedStatus = ['drafts', 'published'];
    public function show($state)
    {
        if (!in_array($state, $this->publishedStatus)) {
            abort(403);
        }
        if ($state == $this->publishedStatus[0]) {
            $posts = auth()->user()->posts->where('published', false);
        } else {
            $posts = auth()->user()->posts->where('published', true);
        }
        return view('user_posts.show', compact('posts'));
    }
}
