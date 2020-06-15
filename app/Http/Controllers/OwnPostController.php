<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnPostController extends Controller
{
    protected $publishedStatus = ['drafts', 'published'];
    public function show($state)
    {
        $published = false;
        if (!in_array($state, $this->publishedStatus)) {
            abort(403);
        }
        if ($state == $this->publishedStatus[0]) {
            $posts = auth()->user()->posts()->where('published', false)->latest()->get();
        } else {
            $posts = auth()->user()->posts()->where('published', true)->latest()->get();
            $published = true;
        }
        return view('own_posts.show', ['posts' => $posts, 'published' => $published]);
    }
    //
}
