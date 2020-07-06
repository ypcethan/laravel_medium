<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect(route('home'));
        }
        return view('welcome');
    }

    public function home()
    {
        $posts = Post::latest()->take(10)->get();
        return view('home', compact("posts"));
    }
}
