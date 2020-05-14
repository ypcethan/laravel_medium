<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
    }

    public function show($username, $slug)
    {
        $post = User::where('username', $username)->get()->first()->posts->filter(function ($p) use ($slug) {
            return $p->slug == $slug;
        })->first();

        /* dd($post); */
        return view('posts.show', compact('post'));
    }
}
