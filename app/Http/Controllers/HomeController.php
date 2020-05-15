<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $posts = Post::all()->take(6);
            return view('home', compact("posts"));
        }
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }
}
