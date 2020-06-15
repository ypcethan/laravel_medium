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
        // if (request()->hasFile('cover_image')) {
        //     dd(request()->cover_image);
        // } else {
        //     dd(request()->all());
        // }
        $attributes = $this->validatePostAttributes();
        $attributes['cover_image'] = request('cover_image')->store('cover_images');
        auth()->user()->posts()->create($attributes);
        return redirect(route('home'));
    }


    public function show($username, $slug)
    {
        $post = User::where('username', $username)->get()->first()->posts->filter(function ($p) use ($slug) {
            return $p->slug == $slug;
        })->first();

        return view('posts.show', compact('post'));
    }

    protected function validatePostAttributes()
    {
        return request()->validate([
            'title'=>'required',
            'content'=>'required',
            'cover_image'=>'required|file'
        ]);
    }
}
